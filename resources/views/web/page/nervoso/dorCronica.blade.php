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
                            <h1>Dor Crônica</h1>
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
                <h3 class="co-blue mb-3">Dor aguda vs. dor crônica</h3>

                <p>Existem duas categorias principais de dor. Ambas podem se manifestar como leve, moderada ou grave. </p>

                <h5 class="co-blue mb-3">1-2 meses - Dor Aguda</h5>
                <p>Ocorre imediatamente após uma lesão e não dura mais do que dois meses, quando tratada adequadamente.</p>

                <h5 class="co-blue mb-3">1-6+ meses - Dor crônica</h5>
                <p>Qualquer tipo de dor que dure seis meses ou mais. É difícil de tratar porque duas pessoas não sentem dor da mesma maneira. Indivíduos que parecem ter o mesmo tipo de dor podem precisar de tratamentos diferentes.</p>

            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-blue" id="2">
        <div class="container  pb-30">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Sintomas</h3>
                <p class="co-white col-7">
                    Dor é uma experiência pessoal e subjetiva. Atualmente, não existe nenhum exame específico que possa medir e localizar com precisão a dor. Assim, os profissionais médicos baseiam-se nas palavras do paciente para descrever o tipo de dor e seu local.Ser bastante específico na descrição da dor para o médico pode dar as melhores indicações da causa da dor. Por exemplo, a dor é lancinante ou entorpecida? Ela queima ou dói? Essas descrições combinam-se para criar um histórico da dor e representam o primeiro passo na avaliação da dor.Como a dor crônica pode ocorrer em vários locais do corpo e por muitas e diferentes razões, os pacientes e seus médicos precisam trabalhar juntos para identificar as suas causas e o melhor tratamento a ser adotado1
                </p>

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
                <h3 class="co-blue mb-3">Causas e Fatores de Risco</h3>


            </div>
        </div>
    </div>



    <div class="about-what-find-blue"  id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Tratamentos</h3>

                <p class="co-white">
                    A dor tem muitas causas diferentes. O envelhecimento normal pode afetar ossos e articulações de maneiras que causam dor. Danos nos nervos ou lesões que não cicatrizam adequadamente também podem causar dor.
                </p>
                <p class="co-white">
                   Frequentemente, a fonte da dor é tão complexa que pode ser muito difícil de diagnosticar. E porque existem tantos tipos e causas de dor, a vasta gama de diferentes tratamentos disponíveis pode ser desconcertante.
                </p>
                <p class="co-white">
                    Como um médico responsável pelo controle da dor pode me ajudar?
                </p>
                <p class="co-white">
                    Os especialistas em controle da dor são médicos especializados em todos os tipos de dor. Eles recebem anos de treinamento avançado sobre controle da dor e se concentram no tratamento de pacientes com dor intensa. Seu médico
                </p>

                <p class="co-white">
                    criará um plano de tratamento que funcione para você, com base no seu tipo de dor, sua gravidade e como você responde ao tratamento da dor.
                </p>




            </div>
        </div>
    </div>




    @include('web.components.newsletter')

@endsection
