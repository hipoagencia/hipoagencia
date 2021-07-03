@extends('user.master.master')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="alert alert-success">Muito Obrigado por sua compra!</h2>
                <h3>Seu pedido foi processado, segue o código: {{ request()->get('order') }}</h3>

            </div>
        </div>
    </div>




@endsection
