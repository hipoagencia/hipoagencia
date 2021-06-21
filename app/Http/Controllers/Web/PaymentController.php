<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        $product = Product::find($request->product);

        return view('user.checkout',[
            'product' => $product
        ]);
    }

    public function cartAdd(Request $request)
    {
        Cart::destroy();
        $product = Product::find($request->product);

        Cart::add($product->id, $product->name, 1, 9.99, 550);
        $cart = Cart::content();

        return redirect()->route('user.checkout');
    }
}
