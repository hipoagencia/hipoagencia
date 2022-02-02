@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-12 col-md-6 order-lg-last">

                        <div class="main-banner-content">
                            <h1>Quem<br>se informa,<br/><span class="text-white">se cuida.</span></h1>
                            <p class="text-white w-75">Tudo o que você precisa saber
                                sobre as principais condições
                                clínicas, direto de médicos
                                e especialistas. Isso sim é saúde.</p><br>
{{--                            <a href="https://saberdasaude.com.br/blog/article/novembro-azul" class="default-btn letter-3 text-uppercase" style="background-color:#023970;" data-uw-styling-context="true">Clique e informe-se<span></span></a>--}}
{{--                        --}}</div>

                    </div>
                    <div class="col col-12 col-md-6 order-lg-first">
                        <img src="{{ url(asset('web/assets/images/boston/woman.png')) }}" alt="Boston Health"/>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="specialities pt-70 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Conheça nossas especialidades</h2>
                <span>
                    Fique por dentro dos principais sintomas, diagnósticos, tratamentos e formas de prevenção
                    para condições clínicas que atingem milhares de brasileiros.
                </span>
            </div>
            <div class="row justify-content-center specialities-links">
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center mb-5">
                    <img src="{{ url(asset('web/assets/images/boston/ico/1.png')) }}" style="width:50%;"/>
                    <h5>Sistema Nervoso</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="{{ url(asset('web/assets/images/boston/ico/3.png')) }}" style="width:50%;"/>
                    <h5>Coração</h5>

                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="{{ url(asset('web/assets/images/boston/ico/2.png')) }}" style="width:50%;"/>
                    <h5>Sistema Urinário</h5>
                </div>

                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="{{ url(asset('web/assets/images/boston/ico/4.png')) }}" style="width:50%;"/>
                    <h5>Cânceres e Tumores</h5>

                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="{{ url(asset('web/assets/images/boston/ico/5.png')) }}" style="width:50%;"/>
                    <h5>Saúde Sexual</h5>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-70">
        <div class="container">
            <div class="section-title">
                <h2>Ou navegue pelo corpo</h2>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-6 text-center">

                    <span onclick="openBrain()" class="pointer"><img
                            src="{{ url(asset('web/assets/images/boston/body/1.jpg')) }}"/></span>
                    <img src="{{ url(asset('web/assets/images/boston/body/2.jpg')) }}"/>
                    <span onclick="openHeart()" class="pointer"><img
                            src="{{ url(asset('web/assets/images/boston/body/3.jpg')) }}"/></span>
                    <img src="{{ url(asset('web/assets/images/boston/body/4.jpg')) }}"/>
                    <span onclick="openUrine()" class="pointer"><img
                            src="{{ url(asset('web/assets/images/boston/body/5.jpg')) }}"/></span>
                    <span onclick="openCancer()" class="pointer"><img
                            src="{{ url(asset('web/assets/images/boston/body/6.jpg')) }}"/></span>
                    <span onclick="openSexual()" class="pointer"><img
                            src="{{ url(asset('web/assets/images/boston/body/7.jpg')) }}"/></span>
                    <img src="{{ url(asset('web/assets/images/boston/body/8.jpg')) }}"/>

                </div>

            </div>
        </div>
    </div>

    @include('web.components.categoriesSlide')

    <div class="how-to-health pt-70 pb-70">
        <div class="container">
            <div class="section-title-blue">
                <h2>Como usar o Saber da Saúde?</h2>
            </div>
            <div class="row justify-content-center">

                <p class="text-white text-center f-18">O Saber da Saúde tem o objetivo de combater a desinformação
                    e ajudar na prevenção das condições clínicas que você encontra no portal. Todos os conteúdos são
                    desenvolvidos por médicos e especialistas, mas é importante deixar uma coisa bem clara: esse site
                    <b>NÃO SUBSTITUI SEU MÉDICO</b>.</p>

                <p class="text-center color-blue">Se você ou alguém que você conhece apresenta quaisquer
                    sintomas, procure imediatamente um especialista.</p>

            </div>
        </div>
    </div>

    @include('web.components.lastArticles')


    @include('web.components.newsletter')



@endsection
