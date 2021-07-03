<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProducts;
use App\Models\Product;
use App\Payment\PagSeguro\CreditCard;
use App\Payment\PagSeguro\Notification;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        try{
            //var_dump(session()->get('pagseguro_session_code'));

            if (!Cart::content()->count())
                return redirect()->route('user.dashboard');

            $product = Product::find($request->product);

            $this->makePagSeguroSection();

            $total = Cart::subtotal();

            return view('user.checkout', [
                'product' => $product,
                'total' => $total
            ]);

        } catch (\Exception $e) {
            session()->forget('pagseguro_session_code');
            redirect()->route('user.checkout.cardDetails');
        }
    }

    public function checkoutDo(Request $request)
    {

        //checkout sem pagamento
        DB::beginTransaction();
        try {

            //Gera o novo pedido
            $order = new Order();
            $order->user = Auth::id();
            $order->total = Cart::priceTotal();
            $order->status = 'Aguardando Pagamento';
            $order->code = '';
            $order->save();

            //Adiciona os produtos no pedido
            foreach (Cart::content() as $item) {
                $orderProducts = new OrderProducts();
                $orderProducts->order = $order->id;
                $orderProducts->product = $item->id;
                $orderProducts->product_amount = $item->qty;
                $orderProducts->save();
            }

            //Limpa o carrinho
            Cart::destroy();

            if ($order && $orderProducts) {

                DB::commit();
                //return redirect()->route('user.dashboard');

            } else {
                DB::rollBack();
            }
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }

    public function cartAdd(Request $request)
    {
        Cart::destroy();
        $product = Product::find($request->product);

        Cart::add($product->id, $product->name, 1, floatval(str_replace('.', ',', $product->price)), 0);
        $cart = Cart::content();

        return redirect()->route('user.checkout.cardDetails');
    }


    public function proccess(Request $request)
    {
        try {

            //Gera o novo pedido
            $order = new Order();
            $order->user = Auth::id();
            $order->total = "0";
            $order->save();

            $dataPost = $request->all();
            $user = auth()->user();
            $cartItems = Cart::content();
            $reference = $order->id;
            //$reference = Uuid::uuid4();

            $creditCardPayment = new CreditCard($cartItems, $user, $dataPost, $reference);
            $result = $creditCardPayment->doPayment();

            $userOrder = [
                'reference' => $reference,
                'pagseguro_code' => $result->getCode(),
                'pagseguro_status' => $result->getStatus(),
                'items' => serialize($cartItems),
            ];

            //Gera o novo pedido
            $order->user = Auth::id();
            $order->total = Cart::subtotal();
            $order->status = $result->getStatus();
            $order->code = $result->getCode();
            $order->save();

            //Adiciona os produtos no pedido
            foreach (Cart::content() as $item) {
                $orderProducts = new OrderProducts();
                $orderProducts->order = $order->id;
                $orderProducts->product = $item->id;
                $orderProducts->price = $item->price;
                $orderProducts->price_total = $item->price * $item->qty;
                $orderProducts->product_amount = $item->qty;
                $orderProducts->save();
            }

            //Limpa o carrinho
            Cart::destroy();

            //Limpa sessão pagseguro
            session()->forget('pagseguro_session_code');

            if ($order && $orderProducts) {
                return response()->json([
                    'data' => [
                        'status' => true,
                        'message' => 'Pedido criado com sucesso',
                        'order' => $reference
                    ]
                ]);
            }

        } catch (\Exception $ex){

            $message = env('APP_DEBUG') ? simplexml_load_string($ex->getMessage()) : 'Erro ao processar o pedido';

            return response()->json([
                'data' => [
                    'status' => false,
                    'message' => $message
                ]
            ], 401);

        }
    }

    public function thanks()
    {
        return view('user.thanks');
    }

    public function notification()
    {
        try{

            $notification = new Notification();
            $notification = $notification->getTransaction();

            //Atualiza o Pedido
            $order = Order::where('id', $notification->getReference());
            $order->update([
                'status' => $notification->getStatus()
            ]);

            //Realiza demais ações com base no status
            if($notification->getStatus() == 3){
                //Status de Pedido pago

                echo "Pedido pago caiaio";
            }

            return response()->json([], 203);

        } catch (\Exception $e) {
            $message = env('APP_DEBUG') ? $e->getMessage() : [];

            return response()->json(['error' => $message], 500);
        }
    }

    private function makePagSeguroSection()
    {
        if (!session()->has('pagseguro_session_code')) {
            $sessionCode = \PagSeguro\Services\Session::create(
                \PagSeguro\Configuration\Configure::getAccountCredentials()
            );

            session()->put('pagseguro_session_code', $sessionCode->getResult());
        }
    }

}
