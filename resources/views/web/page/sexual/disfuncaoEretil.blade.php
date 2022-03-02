@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div class="main-banner-item  pb-70"
             style="background-image:none !important;background-color: #8f6cb3 !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">

                        <div class="main-banner-content specialities-inside-content">
                            <img src="{{url(asset('web/assets/images/boston/ico/5.png'))}}" class="ico-img"><br><br>
                            <h1>Disfunção Erétil</h1>
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
                <a href="#1" class="bs-wizard-dot" style="background-color:#8f6cb3;"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#8f6cb3;">O que é</h5></div>
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
        <div class="container pb-40">
            <div class="section-title">
                <h3 class="co-purple mb-3">A disfunção erétil pode ser solucionada.</h3>
                <p>Um problema íntimo que afeta milhões de homens em todo o mundo, tanto dentro quanto fora do lar.</p>

                <h5 class="co-purple mb-3">O que é?</h5>

                <p>A disfunção erétil, ou impotência, é a incapacidade de obter uma ereção ou mantê-la firme o suficiente para ter uma relação sexual.</p>

            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-purple" id="2">
        <div class="container">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Sintomas</h3>
                <p class="co-white">
                    Problemas persistentes para conseguir uma ereção
                </p>

                <p class="co-white">
                    Problemas persistentes para manter uma ereção
                </p>

                <p class="co-white">
                    Diminuição persistente no desejo sexual
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
{{--                    <p class="co-white">Palpitações cardíacas(sensação de ritmocardíaco acelerado).</p>--}}
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


    <div class="pt-70 about-what-find" id="3">
        <div class="container">
            <div class="section-title pb-40">
                <h3 class="co-purple mb-3">Causas</h3>

                <p>A excitação sexual masculina é um processo complexo que envolve o cérebro, hormônios, emoções, nervos, músculos e vasos sanguíneos. A disfunção erétil pode ser o resultado de um problema com um desses fatores. Da mesma forma, o estresse e as preocupações com a saúde mental podem levar à disfunção erétil ou piorá-la. </p>


            </div>
        </div>
    </div>



    <div class="pt-70 pb-70 bg-gray" id="4">
        <div class="container">
            <div class="section-title">
                <h3 class="co-purple mb-3">Fatores de risco</h3>
            </div>
            <div class="container text-center">

                <p>Vários fatores de risco podem contribuir para a disfunção erétil; por exemplo:</p>
               <div class="row">

                   <div class="col-6">
                       <ul class="col list-style text-left mt-3">
                           <li>Doenças, especialmente diabetes ou doenças cardíacas</li>
                           <li>O consumo de tabaco, que limita o fluxo sanguíneo para as veias e artérias, pode levar a doenças crônicas que levam à disfunção erétil.</li>
                           <li>Estar acima do peso</li>
                           <li>Certos tratamentos médicos, como cirurgia de próstata ou radioterapia para câncer</li>

                       </ul>
                   </div>
                   <div class="col-6">
                       <ul class="col list-style text-left mt-3">
                           <li>Lesões, especialmente se danificarem os nervos ou artérias que controlam as ereções</li>
                           <li>Medicamentos, como antidepressivos, anti-histamínicos e medicamentos para tratar pressão alta, dor ou doenças da próstata</li>
                           <li>Transtornos psicológicos, como estresse, ansiedade ou depressão</li>
                           <li>Uso de álcool e drogas</li>
                       </ul>
                   </div>

               </div>

            </div>
        </div>
    </div>

    <div class="about-what-find-blue" id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <div class="col-8">
                    <h3>Tratamentos</h3>
                    <p class="co-white">
                        Dependendo da causa e da gravidade da disfunção erétil e das condições de saúde pré-existentes, você pode ter várias opções de tratamento. O seu médico pode explicar os riscos e benefícios de cada tratamento e levará em consideração as suas preferências. As preferências de sua/seu parceira(o) também podem influenciar seu tratamento.
                    </p>


                    <h5 class="text-white mt-4">Medicamentos orais</h5>


                    <p class="text-white mb-4">Sildenafila • Tadalafila • Vardenafila • Avanafila</p>



                    <p class="co-white">
                        <b style="color:#023970;">Dispositivo de ereção a vácuo:</b> este é um tubo oco com uma bomba manual ou operada por bateria. O tubo é colocado sobre o pênis e, em seguida, a bomba é utilizada para aspirar o ar de dentro para fora do tubo. Isso cria um vácuo que leva o sangue ao pênis. Depois de ter uma ereção, um anel de tensão é colocado ao redor da base do pênis para reter o sangue e mantê-lo firme. O dispositivo a vácuo é então removido. A ereção geralmente dura o suficiente para que um casal tenha relações sexuais.
                    </p>

                    <p class="co-white">
                        <b style="color:#023970;">Implantes penianos:</b> este tratamento consiste na colocação cirúrgica de dispositivos em ambos os lados do pênis. Esses implantes consistem em dois cilindros infláveis ou maleáveis. Os dispositivos infláveis permitem controlar o tempo e a duração de uma ereção. As barras maleáveis mantêm o pênis firme, mas flexível. Os implantes apresentam um alto grau de satisfação entre os homens que tentaram terapias mais moderadas e falharam. Como qualquer cirurgia, apresenta risco de complicações, como infecções.
                    </p>

                    <p class="co-white">
                        Para entender a extensão da situação, assista a gravação da LIVE: “#NovembroAzul - Saúde Masculina” e tire todas as suas dúvidas.
                    </p>

                    <iframe class="mt-3" width="560" height="315" src="https://www.youtube.com/embed/hA_2-HCFoi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>





    @include('web.components.newsletter')

@endsection
