<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class Cart extends Component
{
    public function cartAdd(Request $request)
    {

        //dd($request->all());

        $product = Product::find($request->product);

        if($product->recurrent == "Assinatura"){
            //Limpa o carrinho caso seja assinatura
            \Gloudemans\Shoppingcart\Facades\Cart::destroy();
        }

        \Gloudemans\Shoppingcart\Facades\Cart::add($product->id, $product->name, 1, floatval(str_replace('.', ',', $product->price)), 0);
        $cart = \Gloudemans\Shoppingcart\Facades\Cart::content();

        if($product->recurrent == "Assinatura"){
            return redirect()->route('user.checkout', ['type' => $product->recurrent, 'id' => $product->id]);
        }

        if($product->recurrent == "Produto"){
            //leva para a tela do carrinho de compras
        }

    }

    public function render()
    {
        return view('livewire.user.cart')
            ->layout('user.master.master');
    }
}
