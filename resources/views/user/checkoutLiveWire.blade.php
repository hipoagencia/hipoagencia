@extends('user.master.master')

@section('content')


    <div class="container my-5">
        <div class="row text-center">
            <div class="container mt-5 text-left">
                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                    <b>Plano:</b> {{ $item->name }}<br>
                    <b>Valor:</b> R${{ $item->price }}
                @endforeach
            </div>
        </div>
    </div>




    <livewire:user.payment/>




@endsection
