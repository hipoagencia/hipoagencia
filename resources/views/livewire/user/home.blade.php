<div>

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

                        @if($product->recurrent == 'Assinatura' && $product->typePayment == 'Mensal')
                            <form action="{{ route('user.cartAdd', ['product' => $product->id, 'tipo' => 'mensal']) }}"
                                  method="POST">
                                @csrf
                                <button class="btn btn-success mt-3">Assinar</button>
                            </form>
                        @elseif ($product->recurrent == 'Assinatura'  && $product->typePayment == 'Pacote Meses')
                            <form action="{{ route('user.cartAdd', ['product' => $product->id, 'tipo' => 'pacote']) }}"
                                  method="POST">
                                @csrf
                                <button class="btn btn-success mt-3">Comprar Período</button>
                            </form>
                        @endif


                    </div>

                @endforeach
            @endif


        </div>

    </div>

</div>
