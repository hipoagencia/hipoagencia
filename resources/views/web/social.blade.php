@extends('web.master.master')

@section('content')


    <section class="p-0 mobile-height parallax" data-parallax-background-ratio="0.5"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/projetos/header.jpg')) }}');">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-8 col-lg-8 col-md-10  flex-column justify-content-center text-center full-screen position-relative z-index-1 md-landscape-h-600px">
                        <span
                            class="margin-35px-bottom alt-font text-large text-white font-weight-300 d-block xs-margin-15px-bottom sm-padding-8-rem-top padding-15-rem-top wow animate__fadeIn ">Agência especializada em</span>
                    <h2 class="alt-font font-weight-900 text-white letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn text-uppercase"
                        style="font-size:85px;line-height: 85px;"
                        data-wow-delay="0.4s">
                        <span class="color-yellow">Mídias<br><span class="text-white">Sociais<br
                                    class="xl-display-none"></span></span>
                    </h2>
                    <div class="text-center position-absolute bottom-0px left-0px w-100 wow animate__fadeIn"
                         data-wow-delay="0.6s">
                        <img src="{{ url(asset('web/assets/images/hipo/social/orelha.png')) }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="py-lg-0 about-bottom" id="sobre"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/social/bloco1.jpg')) }}'); background-repeat: no-repeat"
             data-wow-delay="0.3s" data-enllax-ratio="-.1" data-enllax-type="background"
             data-enllax-direction="horizontal">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-6 col-lg-6 col-md-10 padding-6-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom">

                    <div>
                        <p class="wow animate__fadeIn">Agência especialista em gestão de redes sociais<br>em Santos/SP e
                            Riviera de São Lourenço</p>

                        <p class="text-black font-weight-600" style="font-size:18px;">Quando você decide fazer por conta
                            própria suas postagens
                            nas redes sociais, você deixa de focar no seu próprio negócio, perde tempo e o barato acaba
                            saindo caro.</p>
                        <p>As redes sociais são o presente e o futuro. Prova disso, é que elas não param de crescer o
                            número de usuários e a influência sob nossas vidas. Pense na gestão das suas redes sociais
                            como a sua reputação em seu bairro, quanto melhor, maior o boca-a-boca e consequentemente,
                            mais clientes.</p>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <span class="font-size-14 font-weight-700">Facebook</span><br>
                            <span class="font-size-14 font-weight-700">Instagram</span><br>

                        </div>
                        <div class="col-6">
                            <span class="font-size-14 font-weight-700">Pinterest</span><br>
                            <span class="font-size-14 font-weight-700">TikTok</span><br>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-md-10 wow animate__fadeInRight about-lr">
                </div>
            </div>
        </div>
    </section>


    <section class=" pt-2 pb-2 bg-extra-dark-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-lg-4 col-md-10 wow animate__fadeInRight order-first">

                    <h2 class="alt-font font-weight-900 text-white letter-spacing-minus-1px mb-0 md-w-100 wow animate__fadeIn lg-padding-5-rem-top lg-padding-2-rem-top"
                        style="font-size:105px;line-height: 95px;"
                        data-wow-delay="0.4s">
                        <span class="color-yellow">COMO<br><span class="text-white">FUNCIONA?</span></span>
                    </h2>

                </div>

                <div
                    class="col-12 col-xl-8 col-lg-8 col-md-10 padding-10-rem-tb lg-padding-5-rem-tb  lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom order-last">

                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center sm-padding-4-rem-top">
                        <!-- start text box item -->
                        <div
                            class="col last-paragraph-no-margin md-margin-30px-bottom sm-margin-30px-bottom wow animate__fadeIn"
                            data-wow-delay="0.1">
                            <div class="alt-font text-extra-large font-weight-500 text-white xs-w-100">Geração de
                                conteúdo
                            </div>
                            <div class="text-large font-weight-500 alt-font text-white d-block margin-1-rem-tb">
                                <span
                                    class="w-75 h-1px d-inline-block align-middle bg-white margin-10px-right lg-w-85 sm-w-90 xs-margin-5px-right"></span>01
                            </div>
                            <p class="w-70 lg-w-90">Nosso time elabora os conteúdos e faz uma curadoria dos conteúdos gerados por sua empresa.</p>
                        </div>

                        <div
                            class="col last-paragraph-no-margin md-margin-30px-bottom sm-margin-30px-bottom wow animate__fadeIn"
                            data-wow-delay="0.4">
                            <div class="alt-font text-extra-large font-weight-500 text-white xs-w-100">Explorando
                                Novidades
                            </div>
                            <div class="text-large font-weight-500 alt-font text-white d-block margin-1-rem-tb">
                                <span
                                    class="w-75 h-1px d-inline-block align-middle bg-white margin-10px-right lg-w-85 sm-w-90 xs-margin-5px-right"></span>02
                            </div>
                            <p class="w-70 lg-w-90">As redes sociais vivem evoluindo e a Hipo fica responsável por descobrir as novidades e trends do momento.</p>
                        </div>
                        <!-- end text box item -->
                        <!-- start text box item -->
                        <div class="col last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.8">
                            <div class="alt-font text-extra-large font-weight-500 text-white lg-w-50 xs-w-100">Tráfego
                                Pago
                            </div>
                            <div class="text-large font-weight-500 alt-font text-white d-block margin-1-rem-tb">
                                <span
                                    class="w-75 h-1px d-inline-block align-middle bg-white margin-10px-right lg-w-85 sm-w-90 xs-margin-5px-right"></span>03
                            </div>
                            <p class="w-70 lg-w-90">Com os conteúdos criados, agora vem o coração do trabalho, que é encontrar o cliente certo na hora certa.</p>
                        </div>
                        <!-- end text box item -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section data-wow-delay="0.3s">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <div class="col-lg-12 text-center wow animate__fadeIn" data-wow-delay="0.2s">
                        <h5 class="text-extra-dark-gray font-weight-900 mt-4 mb-1">Conheça o seu novo time
                        </h5>
                    </div>
                </div>
                <div class="col-xl-3 text-center mt-5 wow animate__fadeIn" data-wow-delay="0.4s">
                    <i class="fab fa-facebook-messenger icon-extra-large align-middle text-extra-dark-gray mb-3"></i>
                    <span
                        class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Social Media</span>
                    <p>Responsável por produzir os temas e garantir o funcionamento das operações</p>
                </div>

                <div class="col-xl-3 text-center mt-5 wow animate__fadeIn" data-wow-delay="0.5s">
                    <i class="fas fa-envelope-open-text icon-extra-large align-middle text-extra-dark-gray mb-3"></i>
                    <span
                        class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Copywriter</span>
                    <p>É quem dá vida aos temas, criando textos incríveis e cativantes para serem publicados</p>
                </div>

                <div class="col-xl-3 text-center mt-5 wow animate__fadeIn" data-wow-delay="0.5s">
                    <i class="fas fa-palette icon-extra-large align-middle text-extra-dark-gray mb-3"></i>
                    <span
                        class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Designer</span>
                    <p>Profissional que transforma toda teoria em elementos visuais seguindo as tendências atuais</p>
                </div>

                <div class="col-xl-3 text-center mt-5 wow animate__fadeIn" data-wow-delay="0.5s">
                    <i class="fas fa-paper-plane icon-extra-large align-middle text-extra-dark-gray mb-3"></i>
                    <span class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Gestor de Tráfego</span>
                    <p>Esse é o cara que vai entregar todo esse material incrível para os seus clientes</p>
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
                    <h4 class="alt-font font-weight-300 text-white mb-0">Está pronto para ter<br><span
                            class="font-weight-600">uma rede social</span> incrível?</h4>
                </div>
                <div class="col-12 col-xl-5 col-md-4 position-relative text-center text-md-end">
                    <a href="https://api.whatsapp.com/send?phone=551330274731&text=Ol%C3%A1!%20Estou%20chamando%20sobre%20Redes%20Sociais"
                       target="_blank" class="btn btn-large btn-yellow"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </section>

    @include('web.components.clients')

    @include('web.components.form')


@endsection

