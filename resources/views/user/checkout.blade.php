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

    <div class="container">
        <div class="row">

            <div class="offset-4 col-4">
                <div class="row mb-3">
                    <input type="text" class="form-control" placeholder="Nome do dono" name="card_number">
                </div>
                <div class="row mb-3">
                    <input type="text" class="form-control" placeholder="Número do Cartão" name="card_number">
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                       <div class="row"><input type="text" class="form-control" placeholder="Mês Venc." name="card_number"></div>
                    </div>
                    <div class="col-6">
                        <div class="row"><input type="text" class="form-control" placeholder="Ano Venc." name="card_number"></div>
                    </div>
                </div>

                <div class="row">
                    <a href="#" class="btn btn-success w-100">Finalizar Compra</a>
                </div>
            </div>
        </div>
    </div>

@endsection
