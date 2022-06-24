@extends('web.master.master')

@section('content')

    <section class="parallax p-0" data-parallax-background-ratio="0.3"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/website/bg.jpg')) }}');">
        <div class="container">
            <div class="row">
                <div
                    class="col-12 col-lg-5 col-md-6 col-sm-7 full-screen md-h-650px sm-h-500px d-flex flex-column justify-content-center padding-8-rem-tb">
                    <h1 class="alt-font font-weight-600 title-large text-white letter-spacing-minus-4px margin-4-half-rem-bottom sm-letter-spacing-minus-1-half xs-w-65">
                        Quer se destacar na web?</h1>
                </div>
            </div>
        </div>
        <div class="scroll-down-bottom">
            <a href="#sobre"
               class="section-link d-block w-2px h-35px bg-white mx-auto right-0px left-0px position-absolute">
                <span
                    class="scroll-down-text alt-font font-weight-600 text-white letter-spacing-minus-1-half margin-5px-bottom">rolar</span>
            </a>
        </div>
    </section>

    {{--    <section class="p-0 mobile-height parallax" data-parallax-background-ratio="0.5"--}}
    {{--             style="background-image: url('{{ url(asset('web/assets/images/hipo/projetos/header.jpg')) }}');">--}}
    {{--        <div class="container position-relative">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div--}}
    {{--                    class="col-12 col-xl-8 col-lg-8 col-md-10  flex-column justify-content-center text-center full-screen position-relative z-index-1 md-landscape-h-600px">--}}
    {{--                        <span--}}
    {{--                            class="margin-35px-bottom alt-font text-large text-white font-weight-300 d-block xs-margin-15px-bottom sm-padding-8-rem-top padding-15-rem-top wow animate__fadeIn ">Agência especializada em</span>--}}
    {{--                    <h2 class="alt-font font-weight-900 text-white letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn text-uppercase"--}}
    {{--                        style="font-size:74px;line-height: 85px;"--}}
    {{--                        data-wow-delay="0.4s">--}}
    {{--                        <span class="color-yellow">Criação<br><span class="text-white">de Sites<br--}}
    {{--                                    class="xl-display-none"></span></span>--}}
    {{--                    </h2>--}}
    {{--                    <div class="text-center position-absolute bottom-0px left-0px w-100 wow animate__fadeIn"--}}
    {{--                         data-wow-delay="0.6s">--}}
    {{--                        <img src="{{ url(asset('web/assets/images/hipo/website/orelha.png')) }}"/>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}


    <section class="py-lg-0 about-bottom" id="sobre"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/website/bloco1.jpg')) }}'); background-repeat: no-repeat"
             data-wow-delay="0.3s" data-enllax-ratio="-.4" data-enllax-type="background"
             data-enllax-direction="horizontal">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-6 col-lg-6 col-md-10 padding-6-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom">

                    <div>
                        <p class="wow animate__fadeIn">Agência especialista em criação de sites<br>em Santos/SP e
                            Riviera de São Lourenço</p>

                        <h1 class="alt-font font-weight-900 text-extra-dark-gray title-large letter-spacing-minus-1px mb-4 md-w-100 wow animate__fadeIn"
                            data-wow-delay="0.3s" data-enllax-ratio=".05" data-enllax-type="foreground"
                            data-enllax-direction="horizontal">
                            Sites
                        </h1>

                        <h1 class="alt-font font-weight-900 text-extra-medium-gray title-large-2 letter-spacing-minus-1px mb-4 md-w-100 wow animate__fadeIn"
                            data-wow-delay="0.4s" data-enllax-ratio=".07" data-enllax-type="foreground"
                            data-enllax-direction="horizontal">
                            Lojas Virtuais
                        </h1>

                        <h1 class="alt-font font-weight-900 text-extra-dark-gray title-large-2 letter-spacing-minus-1px mb-4 md-w-100 wow animate__fadeIn"
                            data-wow-delay="0.5s" data-enllax-ratio=".09" data-enllax-type="foreground"
                            data-enllax-direction="horizontal">
                            Landing Pages
                        </h1>

                        <p>Há {{now()->year - 2010 }} anos a Hipo entende a importância da presença digital dos seus clientes. Prezando sempre
                            em criar sites impactantes, bem vistos pelo Google e que gere vendas para seus clientes.</p>



                        <p>Ter um site não é importante, é obrigatório! Porém, se seu site está desatualizado, antiquado
                            ou for feito em ferramentas gratuitas, ele pode denegrir a imagem da sua empresa. Afinal, a
                            primeira impressão é a que fica.</p>


                    </div>

                </div>
                <div class="col-12 col-lg-6 col-md-10 wow animate__fadeInRight about-lr">
                </div>
            </div>
        </div>
    </section>


    <section class=" pt-0 bg-extra-dark-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-lg-3 col-md-10 wow animate__fadeInRight order-first">

                    <h2 class="alt-font font-weight-900 text-white letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn lg-padding-5-rem-bottom lg-padding-2-rem-top"
                        style="font-size:105px;line-height: 95px;"
                        data-wow-delay="0.4s" data-enllax-ratio="-.4" data-enllax-type="foreground"
                        data-enllax-direction="vertical">
                        <span class="color-yellow">EN<br/>TEN<br/>DA</span>
                    </h2>

                </div>

                <div
                    class="col-12 col-xl-9 col-lg-6 col-md-10 padding-10-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom order-last">
                    <div class="row">
                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.4s">
                            <h2 class="text-medium-gray font-weight-900 mt-4 mb-1">Briefing</h2>
                            <p class="text-white">
                                Desenvolvemos sites únicos, que se adaptam a smartphones e convertem em vendas.
                            </p>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.5s">
                            <h2 class="text-medium-gray font-weight-900 mt-4 mb-1">Layout</h2>
                            <p class="text-white">
                                Elaboração do layout com base nas tendências atuais seguindo o briefing como guia.
                            </p>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                            <h2 class="text-medium-gray font-weight-900 mt-4 mb-1">Codificação</h2>
                            <p class="text-white">
                                Uma vez aprovado o layout, unimos a beleza dos elementos com a mágica da programação.
                            </p>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.7s">
                            <h2 class="text-medium-gray font-weight-900 mt-4 mb-1">Testes</h2>
                            <p class="text-white">
                                A última etapa do processo consiste em procurar erros e ajustar o que não está de
                                acordo.
                            </p>
                        </div>

                        <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.8s">
                            <h2 class="text-medium-gray font-weight-900 mt-4 mb-1 color-yellow">Online</h2>
                        </div>
                    </div>
                </div>


            </div>

{{--            <div class="row wow animate__fadeIn" data-wow-delay="0.4s">--}}
{{--                <div class="col-6 col-lg-3 col-md-3 col-sm-6 mb-5">--}}
{{--                    <img src="{{ url(asset('web/assets/images/hipo/portfolio/portfolio.jpg')) }}" alt="portfolio"/>--}}
{{--                </div>--}}

{{--                <div class="col-6 col-lg-3 col-md-3 col-sm-6">--}}
{{--                    <img src="{{ url(asset('web/assets/images/hipo/portfolio/portfolio.jpg')) }}" alt="portfolio"/>--}}
{{--                </div>--}}

{{--                <div class="col-6 col-lg-3 col-md-3 col-sm-6">--}}
{{--                    <img src="{{ url(asset('web/assets/images/hipo/portfolio/portfolio.jpg')) }}" alt="portfolio"/>--}}
{{--                </div>--}}

{{--                <div class="col-6 col-lg-3 col-md-3 col-sm-6">--}}
{{--                    <img src="{{ url(asset('web/assets/images/hipo/portfolio/portfolio.jpg')) }}" alt="portfolio"/>--}}
{{--                </div>--}}

{{--                <div class="col-12 text-center">--}}
{{--                    <a href="#"--}}
{{--                       class="section-link btn btn-fancy btn-round-edge-small btn-large btn-yellow margin-1-half-rem-top">Ver--}}
{{--                        Todos<i class="fas fa-arrow-right right-icon"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="col-12 mt-5 mb-5 wow animate__fadeIn" data-wow-delay="0.4s">
                <h2 class="alt-font font-weight-700 title-small letter-spacing-minus-1px mb-4 md-w-100 text-center text-white  margin-8-rem-top"
                    data-wow-delay="0.3s">
                    Criação de sites e Ecommerce
                </h2>
                <p class="text-white line-height-30px w-75 margin-auto f-16 text-center text-medium-gray wow fadeInRight"
                   data-wow-delay="0.6s">A criação de um site profissional é diferente de apenas criar um site. Além da
                    qualidade do layout que é diferenciada existem estudos, técnologias, técnicas e normas a serem
                    seguidas.</p>

                <div class="row mt-5">

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="color-yellow font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Desenvolvimento de<br>Sites Responsivos</span>
                                    <p>Você sabia que o Google avalia negativamente sites que não se adaptam a
                                        smartphones? Sem contar que os acessos via mobile superaram os do computador faz
                                        anos!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="color-yellow font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Ferramenta de<br>Marketing</span>
                                    <p>Estudamos cada cliente e desenvolvemos ferramentas únicas para transformar quem
                                        apenas está visitando seu site em potenciais clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="color-yellow font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Sites Otimizados (SEO)</span>
                                    <p>Cada etapa do seu site é feita pensando em seguir as normas e exigências do
                                        Google para elevar sua colocação nas pesquisas e atrair diversos clientes de
                                        forma orgânica (gratuita).</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="color-yellow font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Sites Rápidos</span>
                                    <p>Não adianta ter um site com as melhores tecnologias se ele demora 10 segundos
                                        para abrir, certo? Todo o site é desenvolvido pensando em performance pois 1
                                        segundo a mais pode significar 1 cliente a menos.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="color-yellow font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Fácil gerenciamento</span>
                                    <p>Seu site vem com um painel de controle exclusivo para que você possa administrar
                                        as principais informações sem dificuldades.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="color-yellow font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Possibilidades infinitas</span>
                                    <p>Nossa agência digital conta com programadores que desenvolvem toda tecnologia sem terceirizações, permitindo controle total nos projetos dos clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="fix-background padding-100px-tb md-padding-75px-tb sm-padding-50px-tb"
             style="background-image:url('{{ url(asset('web/assets/images/hipo/projetos/header.jpg')) }}');">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">
                    <h4 class="alt-font font-weight-300 text-white mb-0">Está pronto para<br><span
                            class="font-weight-600">ter um site incrível?</span></h4>
                </div>
                <div class="col-12 col-xl-5 col-md-4 position-relative text-center text-md-end">
                    <a href="https://api.whatsapp.com/send?phone=551330274731&text=Ol%C3%A1!%20Estou%20chamando%20sobre%20Sites"
                       target="_blank" class="btn btn-large btn-yellow"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </section>

    @include('web.components.clients')

    @include('web.components.form')


@endsection
