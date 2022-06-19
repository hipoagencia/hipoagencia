@extends('web.master.master')

@section('content')





    <section class="fix-background padding-100px-tb md-padding-75px-tb sm-padding-50px-tb" style="background-image:url('{{ url(asset('web/assets/images/hipo/trafego/bg.jpg')) }}');">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">
                    <h4 class="alt-font font-weight-300 text-white mb-0">Está pronto para<br><span class="font-weight-600">alavancar o seu negócio?</span></h4>
                </div>
                <div class="col-12 col-xl-5 col-md-4 position-relative text-center text-md-end">
                    <a href="https://api.whatsapp.com/send?phone=551330274731&text=Ol%C3%A1!%20Estou%20chamando%20sobre%20Tr%C3%A1fego%20Pago" target="_blank" class="btn btn-large btn-yellow"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </section>


    @include('web.components.clients')

    @include('web.components.form')


@endsection
