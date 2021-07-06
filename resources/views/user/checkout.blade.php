@extends('user.master.master')


@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
@endsection

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




           <div class="col-lg-6">

               <div class="row">
                   <div class="col-md-12 msg">

                   </div>
               </div>

                <form class="col-md-12 px-5" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <input type="text" class="form-control" placeholder="Nome igual no cartão" name="card_name">
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

                    <div class="row mb-3 installments"></div>

                    <div class="row">
                        <button class="btn btn-success w-100 processCheckout" data-payment-type="CREDITCARD">Finalizar Compra</button>
                    </div>

                </form>
            </div>

            <div class="col-lg-6 px-5" style="border-left:1px solid #000">

                <h3>Pagamento via boleto</h3>

                <button class="btn btn-primary w-100 mt-5 processCheckout" data-payment-type="BOLETO">Gerar Boleto</button>

            </div>

        </div>
    </div>

@endsection

@section('js')

    @if(env('PAGSEGURO_ENV') == 'sandbox')
        <script
            src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    @elseif(env('PAGSEGURO_ENV') == 'production')
        <script src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    @endif

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="{{ asset(url('user/assets/js/jquery.ajax.js')) }}"></script>

    <script>
        const sessionId = '{{ session()->get('pagseguro_session_code') }}';
        const urlThanks = '{{ route('user.checkout.thanks') }}';
        const amountTransaction = '{{ $total }}';
        const urlProccess = '{{ route('user.checkout.proccess') }}';
        const csrf = '{{csrf_token()}}'

        PagSeguroDirectPayment.setSessionId(sessionId);
    </script>

    <script src="{{ asset(url('user/assets/js/pagseguro_functions.js')) }}"></script>
    <script src="{{ asset(url('user/assets/js/pagseguro_events.js')) }}"></script>

@endsection
