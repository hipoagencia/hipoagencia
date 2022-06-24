@extends('web.master.master')

@section('content')

    {{--    <section class="p-0 mobile-height parallax" data-parallax-background-ratio="0.5" style="background-image: url('{{ url(asset('web/assets/images/hipo/trafego/bg.jpg')) }}');">--}}
    {{--        <div class="container position-relative">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-12 col-xl-6 col-lg-7 col-md-10 d-flex flex-column justify-content-center text-center full-screen position-relative z-index-1 md-landscape-h-600px">--}}
    {{--                    <span class="margin-35px-bottom alt-font text-large text-white font-weight-300 d-block xs-margin-15px-bottom">Unlimited power customization</span>--}}
    {{--                    <h2 class="text-white alt-font font-weight-600 letter-spacing-minus-1 text-shadow-large sm-no-text-shadow">Hand crafted pixel perfect designs</h2>--}}
    {{--                    <div class="text-center position-absolute bottom-0px left-0px w-100">--}}
    {{--                        <img src="{{ url(asset('web/assets/images/hipo/website/orelha.png')) }}"/>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="py-0 cover-background overflow-visible wow animate__fadeIn"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/trafego/bg.jpg')) }}'); visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 text-center text-md-start d-flex flex-column justify-content-center full-screen md-h-650px padding-10-rem-bottom padding-6-rem-top lg-padding-10-rem-top lg-padding-8-rem-bottom md-padding-6-rem-top md-padding-10-rem-bottom sm-h-auto sm-padding-5-rem-bottom">
                    <span
                        class="align-self-center align-self-md-start alt-font font-weight-600 text-medium letter-spacing-1px line-height-24px border-bottom border-width-1px d-inline-block text-white text-uppercase margin-45px-bottom sm-margin-35px-bottom">Voe alto no meio digital</span>
                    <h1 class="alt-font text-white font-weight-200 letter-spacing-minus-3px margin-2-half-rem-bottom"
                        style="font-size:3.2rem; line-height: 4rem"><span class="font-weight-600  color-yellow">Venda mais com tráfego pago</span>
                        utilizando as melhores práticas do <span class="font-weight-600">marketing digital</span></h1>
                    {{--                    <p class="text-large text-white opacity-6 line-height-30px font-weight-300 w-85 sm-w-100">utilizando as melhores práticas do marketing digital</p>--}}
                </div>
                <div
                    class="col-12 col-lg-6 offset-xl-1 col-md-5 z-index-0 align-self-center align-self-lg-end text-end banner-bottom-right-images">
                    <img src="{{url(asset('web/assets/images/hipo/trafego/foguete.png'))}}" class="tilt-box" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="py-lg-0 about-bottom" id="sobre"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/trafego/bloco1.jpg')) }}'); background-repeat: no-repeat"
             data-wow-delay="0.3s" data-enllax-ratio=".1" data-enllax-type="background"
             data-enllax-direction="horizontal">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-6 col-lg-6 col-md-10 padding-6-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom">

                    <div>
                        <p class="wow animate__fadeIn">Agência especialista em tráfego pago<br>em Santos/SP e Riviera de
                            São Lourenço</p>

                        <h1 class="alt-font font-weight-900 text-extra-dark-gray title-large-2 letter-spacing-minus-1px mb-4 md-w-100 wow animate__fadeIn"
                            data-wow-delay="0.4s" data-enllax-ratio="-.07" data-enllax-type="foreground"
                            data-enllax-direction="horizontal">
                            O que é o tráfego pago?
                        </h1>


                        <p>Em resumo, é a criação e gerenciamento de anúncios em diversas redes distintas com o objetivo
                            de ofertar seus serviços e produtos para um público já interessado nele. </p>
                        <p>Para realizar uma venda no meio digital, são necessários vários contatos com a sua empresa
                            para que ela não caia no esquecimento. E uma boa estratégia faz com que o cliente acesse o
                            seu site, veja as propagandas em suas redes sociais favoritas e até mesmo, apareça na
                            propaganda do seu joguinho de passa tempo.</p>

                        <div class="row">
                            <div class="col-6">
                                <span class="font-size-14 font-weight-700">Google Adwords</span><br>
                                <span class="font-size-14 font-weight-700">Facebook Ads</span><br>
                                <span class="font-size-14 font-weight-700">Instagram Ads</span><br>
                            </div>
                            <div class="col-6">
                                <span class="font-size-14 font-weight-700">Waze Ads</span><br>
                                <span class="font-size-14 font-weight-700">Linkedin Ads</span><br>
                                <span class="font-size-14 font-weight-700">Tiktok Ads</span><br>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-lg-6 col-md-10 wow animate__fadeInRight about-lr">
                </div>
            </div>
        </div>
    </section>


    <section class="pt-0 bg-extra-dark-gray pb-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-lg-4 col-md-10 wow animate__fadeInRight order-first">

                    <div style="margin-top:100px;" data-wow-delay="0.4s" data-enllax-ratio="-.2" data-enllax-type="foreground"
                         data-enllax-direction="vertical">
                        <p class="text-white mb-0">Como funciona o </p>
                        <h2 class="alt-font font-weight-900 pt-0 text-white letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn lg-padding-5-rem-bottom lg-padding-2-rem-top"
                            style="font-size:85px;line-height: 85px;">
                            <span class="color-yellow">REMAR<br/>KETING</span>
                        </h2>
                    </div>

                </div>

                <div
                    class="col-12 col-xl-9 col-lg-5 col-md-10 padding-10-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom order-last">
                    <div class="row">

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.3s">
                            <img src="{{url(asset('web/assets/images/hipo/trafego/2.png'))}}" alt="Cliente em potencial">
                            <h5 class="text-white font-weight-700 mt-4 mb-1 title-extra-small"><span class="color-yellow">Cliente em potencial</span><br>acessa o seu site</h5><br>
                            <i class="line-icon-Arrow-Down icon-extra-large text-white"></i>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.4s">
                            <img src="{{url(asset('web/assets/images/hipo/trafego/1.png'))}}" alt="Cliente em potencial">
                            <h5 class="text-white font-weight-700 mt-4 mb-1 title-extra-small"><span class="color-yellow">Ele sai sem deixar contactar</span><br>ou comprar nada</h5><br>
                            <i class="line-icon-Arrow-Down icon-extra-large text-white"></i>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.5s">
                            <img src="{{url(asset('web/assets/images/hipo/trafego/4.png'))}}" alt="Cliente em potencial">
                            <h5 class="text-white font-weight-700 mt-4 mb-1 title-extra-small"><span class="color-yellow">Mais tarde ele entra na internet</span><br>ou nas redes sociais</h5><br>
                            <i class="line-icon-Arrow-Down icon-extra-large text-white"></i>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                            <img src="{{url(asset('web/assets/images/hipo/trafego/5.png'))}}" alt="Cliente em potencial">
                            <h5 class="text-white font-weight-700 mt-4 mb-1 title-extra-small"><span class="color-yellow">Seu anúncio recaptura o</span><br>interesse e traz ele de volta</h5><br>
                            <i class="line-icon-Arrow-Down icon-extra-large text-white"></i>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.7s">
                            <img src="{{url(asset('web/assets/images/hipo/trafego/6.png'))}}" alt="Cliente em potencial">
                            <h5 class="text-white font-weight-700 mt-4 mb-1 title-extra-small">Seu cliente potencial <br><span class="color-yellow">efetua contato ou uma compra</span></h5><br>
                        </div>

                    </div>
                </div>


            </div>


        </div>
    </section>

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
