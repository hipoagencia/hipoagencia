<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        return view('livewire.user.checkout')
            ->layout('user.master.master');
    }
}
