<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Jobs\Payment\Confirm;
use App\Jobs\Payment\newOrder;
use App\Models\Order;
use App\Models\OrderProducts;
use App\Models\Product;
use App\Payment\PagSeguro\Boleto;
use App\Payment\PagSeguro\CreditCard;
use App\Payment\PagSeguro\Notification;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        try {
            //var_dump(session()->get('pagseguro_session_code'));

            if (!Cart::content()->count())
                return redirect()->route('user.dashboard');

            //Verifica se o usuário preencheu o zipcode, se não, envia para completar
            if (auth()->user()->zipcode == null) {
                session(['goCheckout' => true]);
                return redirect()->route('user.profile')->withErrors('Você precisa preencher todos seus dados para continuar');
            }

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

            //TO-DO validar se o tipo de pagament enviado é válido e aceito internamente

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

            $payment = $dataPost['paymentType'] == 'BOLETO'
                ? new Boleto($cartItems, $user, $reference, $dataPost['hash'])
                : new CreditCard($cartItems, $user, $dataPost, $reference);

            $result = $payment->doPayment();

            //Gera o novo pedido
            $order->user = Auth::id();
            $order->total = Cart::subtotal();
            $order->status = $result->getStatus();
            $order->code = $result->getCode();
            $order->type = $dataPost['paymentType'];
            $order->link_boleto = ($dataPost['paymentType'] == 'BOLETO' ? $result->getPaymentLink() : '');
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

            //Envia os emails
            $data = [
                'reply_name' => env('APP_NAME'),
                'reply_email' => env('MAIL_FROM_ADDRESS'),
                'to' => env('MAIL_FROM_ADDRESS'),
                'to_name' => env('APP_NAME'),
                'subject' => 'Novo pedido número ' . $order->id,
                'message' => $order->id
            ];

            //Envia email de novo pedido para o cliente
            newOrder::dispatch($data)->delay(now()->addSeconds(5));

            //Limpa o carrinho
            Cart::destroy();

            //Limpa sessão pagseguro
            session()->forget('pagseguro_session_code');

            if ($order && $orderProducts) {

                $dataJson = [
                    'status' => true,
                    'message' => 'Pedido criado com sucesso',
                    'order' => $reference
                ];

                if($dataPost['paymentType'] == 'BOLETO') $dataJson['link_boleto'] = $result->getPaymentLink();

                return response()->json([
                    'data' => $dataJson
                ]);
            }

        } catch (\Exception $ex) {

            //$message = env('APP_DEBUG') ? simplexml_load_string($ex->getMessage()) : 'Erro ao processar o pedido';
            $message = $ex->getMessage();

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
        try {

            $notification = new Notification();
            $notification = $notification->getTransaction();

            //Atualiza o Pedido
            $order = Order::where('id', $notification->getReference())->first();

            $order->update([
                'status' => $notification->getStatus()
            ]);

            //Realiza demais ações com base no status
            if ($notification->getStatus() == 3) {

                //Status de Pedido pago
                $data = [
                    'reply_name' => env('APP_NAME'),
                    'reply_email' => env('MAIL_FROM_ADDRESS'),
                    'to' => $order->userr->email,
                    'to_name' => $order->userr->name,
                    'subject' => 'Confirmação de pagamento - ' . env('APP_NAME'),
                    'message' => $order->id
                ];

                //Envia email de novo pedido para o cliente
                Confirm::dispatch($data)->delay(now()->addSeconds(5));

                $data = [
                    'reply_name' => env('APP_NAME'),
                    'reply_email' => env('MAIL_FROM_ADDRESS'),
                    'to' => env('MAIL_FROM_ADDRESS'),
                    'to_name' => env('APP_NAME'),
                    'subject' => 'Pagamento confirmado do pedido ' . $order->id,
                    'message' => $order->id
                ];

                //Envia email de novo pedido para o cliente
                Confirm::dispatch($data)->delay(now()->addSeconds(5));

            }

            //dd($notification);

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
