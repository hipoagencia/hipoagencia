<div>

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


            <div class="col-lg-6 offset-lg-3">

                <div class="row">
                    <div class="col-md-12 msg">

                    </div>
                </div>

                <form class="col-md-12 px-5" >

                    <div class="row mb-3">
                        <input type="text" class="form-control" placeholder="Nome igual no cartão" name="card_name" wire:model="epa">
                    </div>
                    <div class="row mb-3">
                        <input type="text" class="form-control" placeholder="Número do Cartão" style="width: 80%;"
                               name="card_number"><span class="brand"></span>
                        <input type="hidden" name="card_brand">
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Mês Venc."
                                                    name="card_month"></div>
                        </div>
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Ano Venc."
                                                    name="card_year"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <input type="text" class="form-control" placeholder="Código de Segurança" name="card_cvv">
                    </div>

                    <div wire:loading>
                        <div class="row">
                            @include('user.components.loader')
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn btn-success w-100 processCheckout" wire:click.prevent="test" >Finalizar Compra</button>
                    </div>

                </form>
            </div>



        </div>
    </div>

</div>

