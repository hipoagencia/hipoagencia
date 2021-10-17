@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-12 col-md-6 order-lg-last">

                        <div class="main-banner-content">
                            <h1>Quem<br/>se informa,<br/><span class="text-white">se cuida</span></h1>
                            <p>Tudo o que você precisa saber sobre as principais condições clínicas, direto de médicos e
                                especialistas. Isso sim é saúde.</p>
                        </div>

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
                    <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/1.png')) }}"/></a>
                    <h5>Sistema Nervoso</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/3.png')) }}"/></a>
                    <h5>Coração</h5>

                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/2.png')) }}"/></a>
                    <h5>Sistema Urinário</h5>
                </div>

                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/4.png')) }}"/></a>
                    <h5>Cânceres e Tumores</h5>

                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/5.png')) }}"/></a>
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

                <p class="w-75 text-white text-center f-18">O Saber da Saúde tem o objetivo de combater a desinformação
                    e ajudar na prevenção das condições clínicas que você encontra no portal. Todos os conteúdos são
                    desenvolvidos por médicos e especialistas, mas é importante deixar uma coisa bem clara: esse site
                    <b>NÃO SUBSTITUI SEU MÉDICO</b>.</p>

                <p class="f-22 text-center color-blue w-50">Se você ou alguém que você conhece apresenta quaisquer
                    sintomas, procure imediatamente um especialista.</p>

            </div>
        </div>
    </div>

    <div class="pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title text-left">
                        <h3 class="color-gray2">ÚLTIMOS ARTIGOS</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <a href="#" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
                            class="bx bxs-chevron-right"></i><span></span></a>
                </div>
            </div>
            <div class="row justify-content-center">


                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="{{ url(asset('web/assets/images/boston/ico/ico-coracao.png')) }}"/> Coração
                            </h5>
                        </div>

                        <img src="{{ url(asset('web/assets/images/boston/img-blog.jpg')) }}"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="{{ url(asset('web/assets/images/boston/ico/ico-coracao.png')) }}"/> Coração
                            </h5>
                        </div>

                        <img src="{{ url(asset('web/assets/images/boston/img-blog.jpg')) }}"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="{{ url(asset('web/assets/images/boston/ico/ico-coracao.png')) }}"/> Coração
                            </h5>
                        </div>

                        <img src="{{ url(asset('web/assets/images/boston/img-blog.jpg')) }}"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>


            </div>
        </div>
    </div>

    <!--<div class="specialists pt-70 pb-70 bg-color-blue">
        <div class="container">
            <div class="section-title d-block ">
                <h2>Conheça nossos especialistas</h2>
            </div>
            <div class="row justify-content-center">

                <br /><br /><br /><br /><br /><br /><br /><br /><br />

            </div>
        </div>
    </div>-->


    @include('web.components.newsletter')



@endsection
