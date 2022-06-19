@extends('web.master.master')

@section('content')


    <section class="p-0 parallax overlap-height">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div
                    class="col-12 col-lg-5 col-md-6 col-sm-7 full-screen md-h-650px sm-h-400px d-flex flex-column justify-content-center padding-8-rem-tb z-index-9">
                    <h1 class="alt-font font-weight-600 title-large text-white mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-letter-spacing-minus-1-half xs-w-65">
                        Uma agência de peso</h1>
                </div>
            </div>
        </div>
        <div class="down-section text-center"><a href="#sobre" class="section-link up-down-ani"><i
                    class="ti-mouse icon-small text-white"></i></a></div>
        <video loop="" autoplay="" controls="" muted="" class="html-video"
               poster="{{ url(asset('web/assets/images/background-video-bg.jpg')) }}">
            <source type="video/mp4" src="{{ url(asset('web/assets/video/video2.mp4')) }}">
        </video>
    </section>


    <section class="py-lg-0 about-bottom" id="sobre">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-6 col-lg-6 col-md-10 padding-6-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom">

                    <div>
                        <span class="title-small wow animate__fadeIn">Há mais de</span><br>

                        <h1 class="alt-font font-weight-900 text-extra-dark-gray title-large letter-spacing-minus-1px mb-0 md-w-100"
                            data-wow-delay="0.3s" data-enllax-ratio="-.5" data-enllax-type="foreground"
                            data-enllax-direction="horizontal">
                            {{now()->year - 2010 }} anos
                        </h1>
                        <span class="title-small line-height-2px wow animate__fadeIn" data-wow-delay="0.5s">sendo referência em marketing digital</span><br>

                        <p class="mt-4 wow animate__fadeIn" data-wow-delay="0.7s">
                            O formato antiquado de ser agência mudou e a Hipo acompanhou a nova tendência do marketing e
                            publicidade.
                        </p>

                        <p class="wow animate__fadeIn" data-wow-delay="0.7s">
                            Nós somos uma agência de publicidade completa situada em <b>Santos/SP e Riviera de São
                                Lourenço</b>.
                            Cada campanha trás a essência do nosso cliente utilizando as técnicas mais atuais para
                            atingir o
                            seu
                            público alvo.
                        </p>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-md-10 wow animate__fadeInRight about-lr">
                    <div class="outside-box-right position-relative">
                        <img src="{{ url(asset('web/assets/images/hipo/home-sobre.jpg')) }}" class="overflow-hidden"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-lg-0 bg-extra-dark-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-9 col-lg-6 col-md-10 padding-10-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom order-last order-xl-first">
                    <div class="row">

                        <div class="col-lg-4 text-center wow animate__fadeIn padding-2-rem-top" data-wow-delay="0.3s">
                            <i class="solid-icon-Computer-Secure icon-medium align-middle  text-white"></i>
                            <h3 class="text-white text-large font-weight-900 mt-4 mb-1">Sites e Sistemas</h3>
                            <p class="text-white">
                                Desenvolvemos sites únicos, que se adaptam a smartphones e convertem em vendas.
                            </p>
                        </div>

                        <div class="col-lg-4 text-center wow animate__fadeIn padding-2-rem-top" data-wow-delay="0.3s">
                            <i class="fas fa-paint-brush icon-medium align-middle text-white"></i>
                            <h3 class="text-white text-large font-weight-900 mt-4 mb-1">Logo e Identidade</h3>
                            <p class="text-white">
                                Toda comunicação da sua empresa é criada para que converse com seu público-alvo.
                            </p>
                        </div>

                        <div class="col-lg-4 text-center wow animate__fadeIn padding-2-rem-top" data-wow-delay="0.3s">
                            <i class="fab fa-facebook-messenger icon-medium align-middle  text-white"></i>
                            <h3 class="text-white text-large font-weight-900 mt-4 mb-1">Social Media</h3>
                            <p class="text-white">
                                Nossa gestão de redes sociais vai além de apenas posts, trata-se de marketing digital completo.
                            </p>
                        </div>

                        <div class="col-lg-4 text-center wow animate__fadeIn padding-2-rem-top" data-wow-delay="0.3s">
                            <i class="fas fa-bullhorn icon-medium align-middle text-white"></i>
                            <h3 class="text-white text-large font-weight-900 mt-4 mb-1">Tráfego Pago</h3>
                            <p class="text-white">
                                -
                            </p>
                        </div>

                        <div class="col-lg-4 text-center wow animate__fadeIn padding-2-rem-top" data-wow-delay="0.3s">
                            <i class="fas fa-shopping-cart icon-medium align-middle text-white"></i>
                            <h3 class="text-white text-large font-weight-900 mt-4 mb-1">Loja Virtual</h3>
                            <p class="text-white">
                                Prestamos consultoria, criamos sua loja e fornecemos todo suporte necessário.
                            </p>
                        </div>

                        <div class="col-lg-4 text-center wow animate__fadeIn padding-2-rem-top" data-wow-delay="0.3s">
                            <i class="fas fa-bullseye icon-medium align-middle text-white"></i>
                            <h3 class="text-white text-large font-weight-900 mt-4 mb-1">Marketing</h3>
                            <p class="text-white">
                                Você sabe onde quer chegar, nós mostramos o caminho.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-10 wow animate__fadeInRight order-first order-xl-last">

                    <h2 class="alt-font font-weight-900 text-white title-large letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn lg-padding-5-rem-bottom lg-padding-2-rem-top"
                        data-wow-delay="0.3s" data-enllax-ratio="-.3" data-enllax-type="foreground"
                        data-enllax-direction="vertical">
                        <span class="color-yellow">O QUE</span> FAZEMOS
                    </h2>

                </div>
            </div>
        </div>
    </section>


    <section class="py-lg-0 hipo-top">
        <div class="container">
            <div class="row">
                <div class="col-12"><img src="{{ url(asset('web/assets/images/hipo/hipo-servicos.jpg')) }}"
                                         data-enllax-ratio="-1.5" data-enllax-type="foreground"
                                         data-enllax-direction="horizontal"/></div>

                <div
                    class="col-12 col-xl-6 col-lg-6 col-md-10 padding-6-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom">

                    <h2 class="title-small font-weight-800 text-extra-dark-gray line-height-2px wow animate__fadeIn mb-3"
                        data-wow-delay="0.5s"><span class="color-yellow">Agência de</span> Publicidade</h2><br>

                    <p class="wow animate__fadeIn" data-wow-delay="0.7s">
                        O objetivo de uma agência de publicidade é cuidar do planejamento, criação de artes e gestão
                        eficiente de mídia para sua empresa. Buscando sempre criar campanhas que estejam de acordo com
                        os
                        princípios e identidade do cliente.
                    </p>

                    <p class="wow animate__fadeIn" data-wow-delay="0.7s">
                        Uma agência busca por meio do planejamento anunciar nos veículos de comunicação que estejam
                        relacionados ao público alvo da empresa. Criando campanhas que utilizando a mesma linguagem e
                        abordagem em todos os meios que forem divulgados.
                    </p>

                </div>
                <div
                    class="col-12 col-xl-6 col-lg-6 col-md-10 padding-6-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom">


                    <h2 class="title-small font-weight-800 text-extra-dark-gray line-height-2px wow animate__fadeIn mb-3"
                        data-wow-delay="0.5s"><span class="color-yellow">Marketing</span> Digital</h2><br>

                    <p class="wow animate__fadeIn" data-wow-delay="0.7s">
                        O marketing digital é extremamente funcional e mensurável. Nós criamos as campanhas pensando nas
                        necessidades da sua empresa, como por exemplo: conquistar novos clientes, reforço de marca,
                        presença
                        online, engajamento, fidelização de clientes e entre outros.
                    </p>

                    <p class="wow animate__fadeIn" data-wow-delay="0.7s">
                        No meio digital é possível apresentar sua empresa e engajar clientes que já estejam procurando
                        pelos
                        seus serviços, e também, clientes que não o estão procurando mas possuem o perfil de quem se
                        interessa.
                    </p>


                </div>
            </div>
        </div>
    </section>


    <section class="parallax xs-padding-15px-lr" data-parallax-background-ratio="0.5"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/bg-servicos.jpg')) }}');">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 overflow-hidden position-relative">
                    <div class="row">

                        <h2 class="title-small font-weight-800 text-white line-height-2px wow animate__fadeIn mb-3 text-center"
                            data-wow-delay="0.5s"><span class="color-yellow">Marketing Digital em</span> Santos e
                            Riviera
                        </h2><br>

                        <div class="row justify-content-center mt-5 margin-auto">

                            <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn"
                                 data-wow-delay="0.2s" data-enllax-ratio="-0.1" data-enllax-type="foreground"
                                 data-enllax-direction="horizontal">
                                <div class="rm-rotate-box text-center">
                                    <div class="flipper to-left">
                                        <div class="thumb-wrap">
                                            <div
                                                class="front overflow-hidden border-radius-4px overflow-hidden bg-white">
                                                <div class="opacity-medium-2"></div>
                                                <div class="padding-15px-lr">
                                                    <h2 class="text-large text-extra-dark-gray letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-800 mb-4">
                                                        Identidade Visual</h2><br>

                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Criação de logotipo</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Criação de folder / flyer</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Criação de anúncios</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Cartão de Visita</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Papelaria</span><br>
                                                </div>
                                            </div>
                                            <div class="back border-radius-4px overflow-hidden">
                                                <div class="overlay-bg"
                                                     style="background-image: url('{{ url(asset('web/assets/images/hipo/home-sobre.jpg')) }}'); background-size: cover;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn"
                                 data-wow-delay="0.2s" data-enllax-ratio="-0.1" data-enllax-type="foreground"
                                 data-enllax-direction="horizontal">
                                <div class="rm-rotate-box text-center">
                                    <div class="flipper to-left">
                                        <div class="thumb-wrap">
                                            <div
                                                class="front overflow-hidden border-radius-4px overflow-hidden bg-white">
                                                <div class="opacity-medium-2"></div>
                                                <div class="padding-15px-lr">
                                                    <h2 class="text-large text-extra-dark-gray letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-800 mb-4">
                                                        Criação De Sites</h2><br>

                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Criação de sites e hotsites</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Criação de landing page</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Criação de e-commerce / catálogo</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Manutenção em sites</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">SEO para sites</span><br>
                                                </div>
                                            </div>
                                            <div class="back border-radius-4px overflow-hidden">
                                                <div class="overlay-bg"
                                                     style="background-image: url('{{ url(asset('web/assets/images/hipo/home-sobre.jpg')) }}'); background-size: cover;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn"
                                 data-wow-delay="0.2s" data-enllax-ratio="-0.1" data-enllax-type="foreground"
                                 data-enllax-direction="horizontal">
                                <div class="rm-rotate-box text-center">
                                    <div class="flipper to-left">
                                        <div class="thumb-wrap">
                                            <div
                                                class="front overflow-hidden border-radius-4px overflow-hidden bg-white">
                                                <div class="opacity-medium-2"></div>
                                                <div class="padding-15px-lr">
                                                    <h2 class="text-large text-extra-dark-gray letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-800 mb-4">
                                                        Marketing Digital</h2><br>

                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Gestão de Redes Sociais</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Anúncios no Google Adwords</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Geração de conteúdo</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Análise da presença digital</span><br>
                                                    <span
                                                        class=" letter-spacing-1px margin-10px-bottom text-medium alt-font d-inline-block font-weight-500">Refinamento de público</span><br>
                                                </div>
                                            </div>
                                            <div class="back border-radius-4px overflow-hidden">
                                                <div class="overlay-bg"
                                                     style="background-image: url('{{ url(asset('web/assets/images/hipo/home-sobre.jpg')) }}'); background-size: cover;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('web.components.clients')


    @include('web.components.lastArticles')

    <section class="p-0 wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 cover-background md-h-650px sm-h-500px xs-h-350px order-last order-xl-first"
                     data-enllax-ratio="-.1" data-enllax-type="foreground" data-enllax-direction="horizontal"
                     data-wow-delay="0.2s"
                     style="background-image: url('{{ url(asset('web/assets/images/hipo/home-chefe.jpg')) }}');"></div>

                <div class="col-12 col-lg-6 padding-8-half-rem-tb padding-10-half-rem-lr xl-padding-7-half-rem-all
                 lg-padding-4-half-rem-all md-padding-5-half-rem-all xs-padding-5-rem-lr wow animate__fadeIn order-first"
                     data-wow-delay="0.6s">

                    <h2 class="alt-font font-weight-900 text-extra-dark-gray title-large letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn"
                        data-wow-delay="0.3s">
                        PALAVRA<br>
                        DO CEO
                    </h2>
                    <h4 class="alt-font font-weight-300 letter-spacing-minus-1px w-65 margin-2-half-rem-bottom xl-w-100 mt-5">
                        "Nós somos a Hipo, uma agência de publicidade de peso!"</h4>
                    <p class="w-60 xl-w-100">
                        <b class="font-weight-700 text-black title-extra-small">Mr. Hipo</b><br>
                        CEO & Founder
                    </p>
                </div>
            </div>
        </div>
    </section>


    @include('web.components.form')


@endsection
