@extends('user.master.master')

@section('content')



    <div class="container">
        <div class="row">

            @if(!empty($products))
                @foreach($products as $product)

                    <div class="col-sm-4">
                        <h3>{{ $product->name }}</h3>
                        <h5>R${{ $product->price }}</h5>
                        <a href="{{ route('user.checkout', ['product' => $product->id]) }}" class="btn btn-success mt-3">Comprar</a>
                    </div>

                @endforeach
            @else
                <h3>Nenhum Produto Cadastrado</h3>
            @endif
        </div>
    </div>

@endsection
