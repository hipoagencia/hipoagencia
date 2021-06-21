@extends('user.master.master')

@section('content')



    <div class="container">
        <div class="row mb-5">

            @if(\Gloudemans\Shoppingcart\Facades\Cart::count())
                Seu carrinho ({{ \Gloudemans\Shoppingcart\Facades\Cart::count() }})
            @else
                Nenhum item no carrinho
            @endif

        </div>
        <div class="row">

            @if(!empty($products))
                @foreach($products as $product)

                    <div class="col-sm-4">
                        <h3>{{ $product->name }}</h3>
                        <h5>R${{ $product->price }}</h5>

                        <form action="{{ route('user.cartAdd', ['product' => $product->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-success mt-3">Comprar</button>
                        </form>
                    </div>

                @endforeach
            @else
                <h3>Nenhum Produto Cadastrado</h3>
            @endif
        </div>

    </div>

@endsection
