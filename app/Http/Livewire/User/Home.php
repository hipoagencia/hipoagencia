<?php

namespace App\Http\Livewire\User;

use App\Models\Product;
use Livewire\Component;

class Home extends Component
{

    public function mount()
    {

    }

    public function render()
    {
        $products = Product::where('recurrent', 'Assinatura')->orderBy('price')->get();
        //$products = Product::where('recurrent', 'Assinatura')->where('typePayment', 'Mensal')->orderBy('price')->get();

        return view('livewire.user.home',[
            'products' => $products
        ])->layout('user.master.master');
    }
}
