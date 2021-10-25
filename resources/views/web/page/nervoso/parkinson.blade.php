@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div class="main-banner-item  pb-70"
             style="background-image:none !important;background-color: #0e778a !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">

                        <div class="main-banner-content specialities-inside-content">
                            <img src="{{url(asset('web/assets/images/boston/ico/1.png'))}}" class="ico-img"><br><br>
                            <h1>Doença de Parkinson</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-70 pb-70">

        <div class="row bs-wizard" style="border-bottom:0;">

            <div class="col bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">1</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#1" class="bs-wizard-dot" style="background-color:#0e778a;"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#0e778a;">O que é</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- complete -->
                <div class="text-center bs-wizard-stepnum">2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#2" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Sintomas</h5></div>
            </div>

            <div class="col bs-wizard-step "><!-- complete -->
                <div class="text-center bs-wizard-stepnum">3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#3" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Causas</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- active -->
                <div class="text-center bs-wizard-stepnum">4</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#4" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Fatores de Risco</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- active -->
                <div class="text-center bs-wizard-stepnum">5</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#5" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Tratamento</h5></div>
            </div>
        </div>

    </div>



    <div class="pt-70 about-what-find" id="1">
        <div class="container">
            <div class="section-title pb-70">
                <h3 class="co-blue mb-3">O que é a doença de Parkinson?</h3>

                <p>A doença de Parkinson é um distúrbio do movimento que afeta ais de dez milhões de pessoas em todo o mundo.1,2 A doença é progressiva - o que significa que avança com o tempo - e degenerativa, porque é caracterizada por um declínio contínuo das células produtoras de dopamina na região motora do cérebro.</p>
                <p>A dopamina é uma substância química importante que o cérebro usa para regular os movimentos. Seu declínio na doença de Parkinson reduz a capacidade do paciente de controlar ou iniciar o movimento, resultando em sintomas como tremor, movimento lento, rigidez e instabilidade postural.</p>

            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-blue" id="2">
        <div class="container  pb-30">
            <div class="row justify-content-center text-center">


                <div class="row">
                    <div class="col  text-left">
                        <h3 class="co-white">Sintomas motores</h3>
                        <p class="co-white">Os sintomas motores podem tornar as atividades da vida cotidiana desafiadoras.</p>

                        <ul class="list-style">
                            <li class="text-white">Tremor</li>
                            <li class="text-white">Movimentos lentos</li>
                            <li class="text-white">Rigidez</li>
                            <li class="text-white">Instabilidade postural</li>
                            <li class="text-white">Passos aleatórios</li>
                            <li class="text-white">Problemas de dicção</li>
                        </ul>


                    </div>
                    <div class="col  text-left">
                        <h3 class="co-white">Sintomas não motores</h3>
                        <p class="co-white">Mesmo que a doença de Parkinson seja um transtorno do movimento, os sintomas não motores podem ter um impacto muito grande na sua qualidade de vida.</p>

                        <ul class="list-style">
                            <li class="text-white">Diminuição do olfato</li>
                            <li class="text-white">Depressão ou problemas de humor </li>
                            <li class="text-white">Dor</li>
                            <li class="text-white">Insônia</li>
                            <li class="text-white">Disfunção da bexiga ou do intestino</li>
                            <li class="text-white">Fadiga</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


{{--    <div class="about-what-find-blue" style="background-color:#f5364a !important;">--}}
{{--        <div class="container  pb-70">--}}
{{--            <div class="row justify-content-center0">--}}

{{--                <div class="col text-center about-box-top">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>--}}
{{--                    <p class="co-white">Pressão ou desconforto no peito.</p>--}}
{{--                </div>--}}

{{--                <div class="col text-center about-box-top">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>--}}
{{--                    <p class="co-white">Palpitações cardíacas (sensação de ritmocardíaco acelerado).</p>--}}
{{--                </div>--}}

{{--                <div class="col text-center about-box-top">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>--}}
{{--                    <p class="co-white">Pressão ou desconforto no peito.</p>--}}
{{--                </div>--}}

{{--                <div class="col text-center about-box-top">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>--}}
{{--                    <p class="co-white">Pressão ou desconforto no peito.</p>--}}
{{--                </div>--}}


{{--                <div class="col text-center about-box-top">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>--}}
{{--                    <p class="co-white">Pressão ou desconforto no peito.</p>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="about-what-find-blue">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Se sentir algum destes sintomas,<br>entre em contato com o seu médico assim que
                    possível.</h3>

            </div>
        </div>
    </div>


    <div class="pt-70 about-what-find"  id="3">
        <div class="container">
            <div class="section-title pb-70">
                <h3 class="co-blue mb-3">Causas</h3>


            </div>
        </div>
    </div>



    <div class="pt-70 pb-70 bg-gray" id="4">
        <div class="container">
            <div class="section-title">
                <h3 class="co-blue mb-3">Fatores de risco</h3>
            </div>
            <div class="container text-center">



            </div>
        </div>
    </div>


    <div class="about-what-find-blue"  id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Tratamentos</h3>




            </div>
        </div>
    </div>




    @include('web.components.newsletter')

@endsection
