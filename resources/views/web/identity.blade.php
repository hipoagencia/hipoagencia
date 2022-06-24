@extends('web.master.master')

@section('content')


    <section class="parallax p-0 home-digital-agency" data-parallax-background-ratio="0.5"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/identidade/bg.jpg')) }}');">
        <div class="opacity-light bg-gradient-dark-slate-blue-transparent"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative full-screen d-flex flex-column">
                    <h2 class="alt-font text-white w-50 mt-auto font-weight-600 sys mb-0 sm-letter-spacing-minus-1-half xs-w-85">
                        Uma identidade marcante faz com que <span
                            class="color-yellow">seja lembrado mais facilmente</span></h2>
                    <div class="d-flex flex-row align-items-center mt-auto margin-7-half-rem-bottom">
                        <span
                            class="bg-light-brownish-orange w-50 h-1px margin-9-rem-right sm-w-40 sm-margin-5-rem-right xs-w-15 xs-margin-2-rem-right"></span>
                        <span class="alt-font text-large color-yellow">Criação de logotipo e identidade visual</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="big-section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-11 col-xl-6 col-md-6 sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">Cada identidade visual criada em
                        nossa agência traz um DNA único.</h4>
                    <p class="text-large line-height-38px mt-5">Uma boa identidade visual não se trata apenas do design, trata-se de criar uma melhor experiência para quem vê.</p>
                    <a href="#" class="btn btn-link btn-extra-large text-extra-dark-gray">Últimos jobs</a>
                </div>
{{--                <div class="col-11 col-xl-6 col-md-6 wow animate__fadeIn" data-wow-delay="0.2s">--}}
{{--                    <div class="row">--}}
{{--                        <div--}}
{{--                            class="col-12 col-lg-6 last-paragraph-no-margin xs-margin-40px-bottom xs-padding-40px-lr wow animate__fadeIn"--}}
{{--                            data-wow-delay="0.2s">--}}
{{--                            <span--}}
{{--                                class="alt-font font-weight-600 text-extra-large text-extra-dark-gray letter-spacing-minus-1-half d-block margin-15px-bottom">Online</span>--}}
{{--                            <ul class="list-style-01 text-extra-dark-gray">--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Logo--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Apresentações Digitais--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Proposta de Negócios--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Cartão Digital--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-lg-6  xs-padding-40px-lr last-paragraph-no-margin wow animate__fadeIn"--}}
{{--                             data-wow-delay="0.3s"--}}
{{--                             style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">--}}
{{--                            <span--}}
{{--                                class="alt-font font-weight-600 text-extra-large text-extra-dark-gray letter-spacing-minus-1-half d-block margin-15px-bottom">Offline</span>--}}
{{--                            <ul class="list-style-01 text-extra-dark-gray">--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Design de fachada--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Cartão de visitas--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Pasta e Papel Timbrado--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                                <li><i class="fas fa-check text-extra-medium-gray"></i>Brindes--}}
{{--                                    <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row align-items-center justify-content-center margin-5-rem-top md-margin-7-rem-top">
                <div
                    class="col-12 col-lg-3 col-md-5 col-sm-6 text-center text-lg-end order-1 md-margin-5-rem-bottom xs-margin-4-rem-bottom wow animate__fadeInRight"
                    data-wow-delay="0.7s"
                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
                    <i class="fas fa-quote-right icon-small d-block opacity-3 margin-25px-bottom"></i>
                    <span
                        class="alt-font font-weight-500 text-large line-height-30px text-extra-dark-gray d-inline-block w-80">
                        <b>Online</b><br>
                        Criação de Logo<br>
                        Apresentações Digitais<br>
                        Proposta de Negócios<br>
                        Cartão Digital<br>
                    </span>
                </div>
                <div class="col-12 col-lg-6 col-md-8 p-0 order-3 order-lg-2 wow animate__fadeIn"
                     style="visibility: visible; animation-name: fadeIn;">
                    <img src="{{ url(asset('web/assets/images/hipo/identidade/hipo.png')) }}" alt="" data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-3 col-md-5 col-sm-6 text-center text-lg-start order-2 order-lg-3 md-margin-5-rem-bottom xs-margin-7-rem-bottom wow animate__fadeInLeft"
                    data-wow-delay="0.7s"
                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
                    <i class="fas fa-quote-left icon-small d-block opacity-3 margin-25px-bottom"></i>
                    <span
                        class="alt-font font-weight-500 text-large line-height-30px text-extra-dark-gray d-inline-block w-80">
                        <b>Offline</b><br>
                        Design de fachada<br>
                        Cartão de visitas<br>
                        Pasta e Papel Timbrado<br>
                        Brindes<br>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <section
        class="big-section background-position-center background-no-repeat wow animate__fadeIn pb-0 bg-extra-dark-gray"
        data-wow-delay="0.2s"
        style="background-image: url('{{ url(asset('web/assets/images/hipo/identidade/efeito.png')) }}'); visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 text-center">
                    <h5 class="alt-font font-weight-300 text-white mb-0 letter-spacing-minus-1px">Nós ajudamos a criar
                        logos</h5>
                    <div
                        class="cd-headline slide alt-font font-weight-600 title-extra-large text-white line-height-170px lg-h-120px overflow-hidden">
                                <span class="cd-words-wrapper">
                                    <b class="letter-spacing-minus-5px sm-letter-spacing-minus-3px is-visible">únicos</b>
                                    <b class="letter-spacing-minus-5px sm-letter-spacing-minus-3px is-hidden">impactantes</b>
                                    <b class="letter-spacing-minus-5px sm-letter-spacing-minus-3px is-hidden">marcantes</b>
                                </span>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="pt-0 bg-extra-dark-gray pb-0 wow animate__fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div
                    class="col-12 col-xl-9 col-lg-12 col-md-10 padding-10-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom order-last">
                    <div class="row">

                        <div class="col-lg-6 text-center wow animate__fadeIn mb-5" data-wow-delay="0.1s">
                            <span
                                class="alt-font text-medium font-weight-500 text-white d-inline-block text-uppercase letter-spacing-2px margin-25px-bottom">Briefing</span>
                            <h6 class="alt-font font-weight-600 d-block margin-20px-bottom xl-w-100"><a
                                    class="text-white" href="#">Através de uma reunião e uma relação de perguntas,
                                    sabemos qual direção tomar a gosto do cliente.</a></h6>
                        </div>

                        <div class="col-lg-6 text-center wow animate__fadeIn mb-5" data-wow-delay="0.2s">
                            <span
                                class=" alt-font text-medium font-weight-500 text-white d-inline-block text-uppercase letter-spacing-2px margin-25px-bottom">Esboço</span>
                            <h6 class="alt-font font-weight-600 d-block margin-20px-bottom xl-w-100"><a
                                    class="text-white" href="#">Elaboramos e apresentamos propostas utilizando a etapa
                                    do Briefing como referência.</a></h6>
                        </div>

                        <div class="col-lg-6 text-center wow animate__fadeIn mb-5" data-wow-delay="0.3s">
                            <span
                                class=" alt-font text-medium font-weight-500 text-white d-inline-block text-uppercase letter-spacing-2px margin-25px-bottom">Criação</span>
                            <h6 class="alt-font font-weight-600 d-block margin-20px-bottom xl-w-100"><a
                                    class="text-white" href="#">Elaboramos e apresentamos propostas utilizando a etapa
                                    do Briefing como referência.</a></h6>
                        </div>

                        <div class="col-lg-6 text-center wow animate__fadeIn" data-wow-delay="0.4s">
                            <span
                                class="alt-font text-medium font-weight-500 text-white d-inline-block text-uppercase letter-spacing-2px margin-25px-bottom">Ajustes</span>
                            <h6 class="alt-font font-weight-600 d-block margin-20px-bottom xl-w-100"><a
                                    class="text-white" href="#">Ajustamos as artes com base nas solicitações.</a></h6>
                        </div>


                    </div>
                </div>


            </div>


        </div>
    </section>



    <section class="fix-background padding-100px-tb md-padding-75px-tb sm-padding-50px-tb"
             style="background-image:url('{{ url(asset('web/assets/images/hipo/identidade/bg.jpg')) }}');">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">
                    <h4 class="alt-font font-weight-300 text-white mb-0">Está pronto para <span class="font-weight-600">criarmos<br>uma identidade incrível?</span>
                    </h4>
                </div>
                <div class="col-12 col-xl-5 col-md-4 position-relative text-center text-md-end">
                    <a href="https://api.whatsapp.com/send?phone=551330274731&text=Ol%C3%A1!%20Estou%20chamando%20sobre%20Tr%C3%A1fego%20Pago"
                       target="_blank" class="btn btn-large btn-yellow"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </section>


    @include('web.components.clients')

    @include('web.components.form')


@endsection
