@extends('web.master.master')

@section('content')


    <section class="parallax p-0 home-digital-agency" data-parallax-background-ratio="0.5" style="background-image: url('{{ url(asset('web/assets/images/hipo/sistemas/bg.jpg')) }}');">
        <div class="opacity-light bg-gradient-dark-slate-blue-transparent"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative full-screen d-flex flex-column">
                    <h2 class="alt-font text-white w-50 mt-auto font-weight-600 sys mb-0 sm-letter-spacing-minus-1-half xs-w-85">Criamos sistemas para <span class="color-yellow">solucionar os seus problemas</span></h2>
                    <div class="d-flex flex-row align-items-center mt-auto margin-7-half-rem-bottom">
                        <span class="bg-light-brownish-orange w-50 h-1px margin-9-rem-right sm-w-40 sm-margin-5-rem-right xs-w-15 xs-margin-2-rem-right"></span>
                        <span class="alt-font text-large color-yellow">Pare de gerenciar sua empresa pelo Excel!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    <section class="py-0 cover-background overflow-visible wow animate__fadeIn"--}}
{{--             style="background-image: url('{{ url(asset('web/assets/images/hipo/sistemas/bg.jpg')) }}'); visibility: visible; animation-name: fadeIn;">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 text-center text-md-start d-flex flex-column justify-content-center full-screen md-h-650px padding-10-rem-bottom padding-6-rem-top lg-padding-10-rem-top lg-padding-8-rem-bottom md-padding-6-rem-top md-padding-10-rem-bottom sm-h-auto sm-padding-5-rem-bottom" style="height: 772px;">--}}
{{--                    <span class="align-self-center align-self-md-start alt-font font-weight-600 text-medium letter-spacing-1px line-height-24px color-yellow border-bottom border-width-1px d-inline-block text-uppercase sm-margin-15px-bottom">Desenvolvimento de sistemas online</span>--}}
{{--                    <h1 class="alt-font text-white font-weight-200 letter-spacing-minus-3px margin-2-half-rem-bottom" style="font-size:3.2rem; line-height: 4rem">--}}
{{--                        Pare de controlar sua empresa<span class="font-weight-600  color-yellow"> através do Excel</span>--}}
{{--                    </h1>--}}
{{--                    <p class="text-large text-white opacity-6 line-height-30px font-weight-300 w-85 sm-w-100">Criamos soluções únicas para automatizar processos e auxiliar no controle da sua empresa!</p>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="col-12 col-lg-6 offset-xl-1 col-md-5">--}}
{{--                    <img src="{{url(asset('web/assets/images/hipo/sistemas/app.png'))}}" class="tilt-box" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="py-lg-0 about-bottom overflow-visible" id="sobre"
             style="background-image: url('{{ url(asset('web/assets/images/hipo/sistemas/bloco1.jpg')) }}'); background-repeat: no-repeat"
             data-wow-delay="0.3s" data-enllax-ratio="-.2" data-enllax-type="background"
             data-enllax-direction="vertical">
        <div class="container">
            <div class="row">
                <div class="col-12 overlap-section md-no-margin-top md-margin-70px-bottom sm-margin-50px-bottom" style="">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                            <!-- start feature box item-->
                            <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                                <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                    <i class="line-icon-Cursor-Click2 icon-medium text-extra-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">Desenvolvimento</div>
                                </div>
                            </div>
                            <!-- end feature box item-->
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                            <!-- start feature box item-->
                            <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                                <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                    <i class="line-icon-Bakelite icon-medium text-extra-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">Manutenção</div>
                                    <span></span>
                                </div>
                            </div>
                            <!-- end feature box item-->
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-8">
                            <!-- start feature box item-->
                            <div class="feature-box h-100 feature-box-left-icon-middle padding-3-rem-all bg-white box-shadow-small box-shadow-large-hover border-radius-4px overflow-hidden last-paragraph-no-margin lg-padding-2-half-rem-tb lg-padding-2-rem-lr md-padding-4-rem-all">
                                <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                    <i class="line-icon-Boy icon-medium text-extra-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <div class="text-slate-blue font-weight-500 text-large margin-5px-bottom">Consultoria</div>
                                </div>
                            </div>
                            <!-- end feature box item-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-xl-6 col-lg-6 col-md-10 padding-6-rem-tb lg-padding-5-rem-tb lg-padding-2-half-rem-right md-padding-15px-right md-no-padding-tb md-margin-5-rem-bottom">

                    <div>
                        <p class="wow animate__fadeIn">Agência especialista em desenvolvimento de sistemas web<br>em Santos/SP e Riviera de
                            São Lourenço</p>

                        <h2 class="alt-font font-weight-900 text-extra-dark-gray sys letter-spacing-minus-1px mb-4 md-w-100 wow animate__fadeIn"
                            data-wow-delay="0.4s">
                            O que é um<br>sistema web?
                        </h2>

                        <p>
                            É uma solução desenvolvida para rodar pelos navegadores e sem a necessidade de instalação, como no caso dos apps. Garantindo que se torne acessível em qualquer dispositivo que aceite um navegador na internet (smartphones, computadores, smart tv etc)
                        </p>

                        <h2 class="alt-font font-weight-900 text-extra-dark-gray sys letter-spacing-minus-1px mb-4 md-w-100 wow animate__fadeIn"
                            data-wow-delay="0.4s">
                            Por quê preciso<br>de um?
                        </h2>

                        <p>
                            A maioria das empresas utiliza planilhas para gerir o seu negócio. O que pode ser bastante perigoso, levando em consideração que esses arquivos podem se perder, serem corrompidos ou até mesmo extraviado.
                        </p>
                        <p>
                            Quando desenvolvemos um sistema, toda informação está armazenada na nuvem e com medidas de segurança que protegem os dados tão preciosos. Sem contar que todo projeto é desenvolvido exclusivamente para a sua necessidade e com controle rigoroso de acesso.
                        </p>

                    </div>

                </div>
                <div class="col-12 col-lg-6 col-md-10 wow animate__fadeInRight about-lr">
                </div>
            </div>
        </div>
    </section>


    <section class=" pt-0 bg-extra-dark-gray">
        <div class="container">

            <div class="col-12 mt-5 mb-5 wow animate__fadeIn" data-wow-delay="0.4s">
                <h2 class="alt-font font-weight-700 title-small letter-spacing-minus-1px mb-4 md-w-100 text-center text-white  margin-8-rem-top"
                    data-wow-delay="0.3s">
                    Vantagens de um sistema web
                </h2>

                <div class="row mt-5">

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <i class="solid-icon-Globe icon-medium align-middle  color-yellow mb-4"></i>
                                    <span class="text-white font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Acessível</span>
                                    <p>Seu projeto fica acessível em qualquer dispositivo que consiga se conectar na internet, sem necessidade de instalações.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <i class="solid-icon-Smartphone-3 icon-medium align-middle  color-yellow mb-4"></i>
                                    <span class="text-white font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Mobile</span>
                                    <p>Precisando acessar alguma informação fora do escritório? Não tem problema! O sistema é 100% funcional em smartphones.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <i class="solid-icon-Equalizer icon-medium align-middle  color-yellow mb-4"></i>
                                    <span class="text-white font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Manteneção</span>
                                    <p>Por ser tudo na nuvem, seu sistema não tem altos custos com hardware.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <i class="solid-icon-Code-Window icon-medium align-middle  color-yellow mb-4"></i>
                                    <span class="text-white font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Integrações</span>
                                    <p>Utilize seu sistema para integrar com diversas outras empresas e automatize rotinas antes feitas por pessoas.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <i class="solid-icon-Cloud-Lock icon-medium align-middle  color-yellow mb-4"></i>
                                    <span class="text-white font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Segurança</span>
                                    <p>O sistema conta com diversos níveis de criptografia e com backup diário das informações.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-1-rem-all">
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <i class="solid-icon-Data-Center icon-medium align-middle  color-yellow mb-4"></i>
                                    <span class="text-white font-weight-600 d-block margin-10px-bottom alt-font text-extra-large">Controle</span>
                                    <p>Gerencie os usuários, permissões e tarefas executadas no sistema. Nada passa sem que você saiba!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="fix-background padding-100px-tb md-padding-75px-tb sm-padding-50px-tb" style="background-image:url('{{ url(asset('web/assets/images/hipo/sistemas/bg.jpg')) }}');">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">
                    <h4 class="alt-font font-weight-300 text-white mb-0">Está pronto para gerenciar<br><span class="font-weight-600">melhor o seu negócio?</span></h4>
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
