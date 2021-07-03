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

            @if(!empty($user->orders))
            <div class="col-12 mb-5">
                <h3>Tem plano ativo</h3><br>-
                <p>#{{ $user->orders->id }} - {{ $user->orders->status }}</p>
                <a href="#" class="btn btn-success">Efetuar Pagamento</a>
            </div>
            @endif


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
                @endif

                {{--            @if(!empty($user->orders))--}}
                {{--                <div class="col-12 mb-5">--}}
                {{--                    <h3>Tem plano ativo</h3><br>--}}
                {{--                    <p>#{{ $user->orders->id }} - {{ $user->orders->status }}</p>--}}
                {{--                    <a href="#" class="btn btn-success">Efetuar Pagamento</a>--}}
                {{--                </div>--}}
                {{--            @else--}}
                {{--                @if(!empty($products))--}}
                {{--                    @foreach($products as $product)--}}

                {{--                        <div class="col-sm-4">--}}
                {{--                            <h3>{{ $product->name }}</h3>--}}
                {{--                            <h5>R${{ $product->price }}</h5>--}}

                {{--                            <form action="{{ route('user.cartAdd', ['product' => $product->id]) }}" method="POST">--}}
                {{--                                @csrf--}}
                {{--                                <button class="btn btn-success mt-3">Comprar</button>--}}
                {{--                            </form>--}}
                {{--                        </div>--}}

                {{--                    @endforeach--}}
                {{--                @else--}}
                {{--                    <h3>Nenhum Produto Cadastrado</h3>--}}
                {{--                @endif--}}
                {{--            @endif--}}

        </div>

    </div>

@endsection
