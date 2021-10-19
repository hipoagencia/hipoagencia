@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div class="main-banner-item  pb-70"
             style="background-image:none !important;background-color: #d4394b !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">

                        <div class="main-banner-content specialities-inside-content">
                            <img src="{{url(asset('web/assets/images/boston/ico/3.png'))}}" class="ico-img"><br><br>
                            <h1>Fibrilação Atrial</h1>
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
                <a href="#" class="bs-wizard-dot" style="background-color:#ac1d2e;"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#ac1d2e;">O que é</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- complete -->
                <div class="text-center bs-wizard-stepnum">2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Sintomas</h5></div>
            </div>

            <div class="col bs-wizard-step "><!-- complete -->
                <div class="text-center bs-wizard-stepnum">3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Causas</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- active -->
                <div class="text-center bs-wizard-stepnum">4</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Fatores de Risco</h5></div>
            </div>

            <div class="col bs-wizard-step disabled"><!-- active -->
                <div class="text-center bs-wizard-stepnum">5</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#808080;">Tratamento</h5></div>
            </div>
        </div>


    </div>



    <div class="pt-70 about-what-find">
        <div class="container">
            <div class="section-title pb-70">
                <h3 class="co-red mb-3">O que é a Fibrilação Atrial?</h3>
                <p>A Fibrilação Atrial é um tipo comum de batimentos cardíacos irregulares que afeta a capacidade do seu
                    coração de bombear sangue normalmente, aumentando o risco de sofrer um acidente vascular cerebral ou
                    outras doenças relacionadas com o coração.¹</p>
                <p>A Fibrilação Atrial (F.A.) é o tipo de arritmia mais frequente na cardiologia e existem diferentes
                    tipos que você deve conhecer para receber um tratamento eficaz.</p>

                <p class="co-red">Assista este vídeo e conheça os tipos de Fibrilação Atrial.</p>
                {{--                <img src="{{ url(asset('web/assets/images/boston/specialities/video.png')) }}" />--}}

                <iframe width="560" height="315" src="https://www.youtube.com/embed/XHV85Tefcb8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                <p class="pb-40">https://youtu.be/XHV85Tefcb8</p>
            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-red">
        <div class="container  pb-70">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Sintomas</h3>
                <p class="co-white">Algumas pessoas com FA não sentirão nenhum sintoma. Aqueles que têm sintomas podem
                    experimentar:
                </p>

            </div>
        </div>
    </div>

    <div class="about-what-find-blue" style="background-color:#f5364a !important;">
        <div class="container  pb-70">
            <div class="row justify-content-center0">

                <div class="col text-center about-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>
                    <p class="co-white">Pressão ou desconforto no peito.</p>
                </div>

                <div class="col text-center about-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>
                    <p class="co-white">Palpitações cardíacas(sensação de ritmocardíaco acelerado).</p>
                </div>

                <div class="col text-center about-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>
                    <p class="co-white">Pressão ou desconforto no peito.</p>
                </div>

                <div class="col text-center about-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>
                    <p class="co-white">Pressão ou desconforto no peito.</p>
                </div>


                <div class="col text-center about-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}"/>
                    <p class="co-white">Pressão ou desconforto no peito.</p>
                </div>


            </div>
        </div>
    </div>


    <div class="about-what-find-blue">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Se sentir algum destes sintomas,<br>entre em contato com o seu médico assim que
                    possível.</h3>

            </div>
        </div>
    </div>


    <div class="pt-70 about-what-find">
        <div class="container">
            <div class="section-title pb-70">
                <h3 class="co-red mb-3">Causas</h3>
                <p>As causas mais comuns da Fibrilação Atrial (F.A.) incluem anormalidades ou danos ao coração e o risco
                    também aumenta à medida que nosso corpo envelhece. No entanto, em alguns casos, a causa é
                    desconhecida. </p>
                <p>A seguir, apresentamos algumas das mais conhecidas:</p>


                <div class="row">
                    <div class="col text-left">
                        <ul class="list-style">
                            <li>Pressão alta: É uma doença comum na qual o sangue flui através dos vasos sanguíneos ou
                                artérias a pressões acima do normal. A pressão alta, às vezes chamada de hipertensão,
                                ocorre quando essa pressão nas paredes das
                                artérias é muito alta. 2
                            </li>
                            <li>Ataques cardíacos: A maioria dos ataques cardíacos é causada por um coágulo que bloqueia
                                uma das artérias coronárias. As artérias coronárias transportam sangue e oxigênio para o
                                coração. Se o fluxo sanguíneo é bloqueado, o coração sofre com a falta de oxigênio e as
                                células cardíacasmorrem. 3
                            </li>
                            <li>Doença arterial coronária: Ocorre quando as artérias que fornecem o sangue ao músculo
                                cardíaco tornam-se duras e estreitas. Isto é devido ao acúmulo de colesterol e outros
                                materiais chamados placa na camada interna das paredes das artérias. 4
                            </li>
                            <li>Problemas cardíacos hereditários: As anormalidades genéticas geralmente estão
                                relacionadas a arritmias (batimentos irregulares) ou cardiomiopatias (doenças do músculo
                                cardíaco). 5
                            </li>
                        </ul>
                    </div>
                    <div class="col text-left">
                        <ul class="list-style">
                            <li>Doença pulmonar crônica: É uma doença comum que causa dificuldade para respirar e a
                                principal causa é o tabagismo. Quanto mais uma pessoa fuma, maior a probabilidade de
                                desenvolver esta doença. 6
                            </li>
                            <li>Hipertireoidismo ou outro desequilíbrio metabólico: O hipertireoidismo é a
                                hiperatividade da glândula tireoide, que resulta em altas concentrações de hormônios da
                                tireoide e na aceleração das funções vitais do corpo. Alguns de seus sintomas incluem
                                perda inesperada de peso, batimentos cardíacos rápidos ou irregulares, irritabilidade e
                                sudorese. 7
                            </li>
                            <li>Apneia do sono: É um transtorno comum em que a respiração é interrompida ou se torna
                                muito superficial. Essas interrupções podem durar de alguns segundos a minutos e podem
                                ocorrer mais de 30 vezes por hora. 8
                            </li>
                            <li>Estresse devido a cirurgia, pneumonia ou outras doenças.</li>
                            <li>Infecção viral.</li>
                            <li>Exposição a certos estimulantes, incluindo alguns medicamentos, cafeína, tabaco e
                                álcool.
                            </li>
                            <li>Cirurgia cardíaca prévia.</li>
                            <li>Mau funcionamento do marca-passo natural do coração.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="pt-70 pb-70 bg-gray">
        <div class="container">
            <div class="section-title">
                <h3 class="co-red mb-3">Fatores de risco</h3>
            </div>
            <div class="container text-center">

                <p>Alguns fatores, além de aumentar o risco de desenvolver Fibrilação Atrial, também podem aumentar as
                    probabilidades de sofrer um AVC ou qualquer outra complicação. Estes são:</p>


                <b class="co-red">Idade:</b> Quanto mais anos tiver, maior será o risco de desenvolver Fibrilação
                Atrial.<br>
                <b class="co-red">Pressão arterial alta:</b> Ter pressão alta, especialmente se não estiver bem
                controlada com mudanças no estilo de vida ou medicamentos, pode aumentar o risco de sofrer desta doença
                com algumas complicações<br>
                <b class="co-red">Obesidade:</b> As pessoas obesas têm um risco maior de desenvolver a Fibrilação Atrial
                ou sofrer um AVC.<br>
                <b class="co-red">Fator hereditário:</b> Se tiver um parente direto com fibrilação atrial, se tem um
                risco maior de desenvolvê-la. Isso significa que existem alguns genes que favorecem o aparecimento desta
                doença.<br>

                <h4 class="co-red mb-3 mt-5">Como a Fibrilação Atrial aumenta o risco<br>de acidente vascular cerebral
                    (AVC)?</h4>
                <p>Como na FA seu coração não bombeia sangue normalmente, pode acontecer que as células do sangue se
                    juntem e fiquem aderidas, formando coágulos em uma área do coração chamada apêndice auricular
                    esquerdo (AAE). Se um coágulo de sangue escapa e viaja para outra parte do corpo, ele pode bloquear
                    o suprimento de sangue para o cérebro e causar um acidente vascular cerebral.</p>
                <p>Em média, as pessoas com FA têm cinco vezes mais risco de acidente vascular cerebral do que as
                    pessoas com ritmos cardíacos normais. Um parente de primeiro grau de alguém que sofreu Morte súbita
                    cardíaca tem mais do que o dobro do risco de morte primária.2</p>

            </div>
        </div>
    </div>

    <div class="about-what-find-blue">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Tratamentos para a Fibrilação Atrial</h3>
                <p class="co-white">Existem vários tratamentos para a Fibrilação Atrial (F.A.) que ajudam a controlar
                    sua frequência cardíaca, restaurar o ritmo cardíaco normal e/ou controlar a atividade elétrica do
                    coração, que incluem:</p>
                <h5 class="text-uppercase co-white  mt-4 mb-4">
                    Cardioversão elétrica<br>
                    Procedimentos de ablação<br>
                    Marca-passo permanente<br>
                    Procedimentos pela técnica de Maze<br>
                    Anticoagulantes Orais<br>
                </h5>

                <p class="co-white">Embora esses tratamentos possam aliviar alguns dos seus sintomas da Fibrilação
                    Atrial, essa arritmia pode voltar sem que você perceba, ou gerar efeitos colaterais como hemorragias
                    perigosas, principalmente pela medicação com anticoagulantes orais.
                </p>
                <p class="co-white">Por este motivo existem tratamentos alternativos como a Oclusão do Apêndice Atrial
                    Esquerdo (OAAE) que te ajuda a levar uma vida ideal. </p>

            </div>
        </div>
    </div>

    <div class="pt-70 about-what-find  pb-70">
        <div class="container text-center">
            <div class="section-title">
                <h3 class="mb-3 color-blue">Implante do dispositivo OAAE<br>
                    Uma alternativa aos anticoagulantes orais</h3>
            </div>

            <div class="row">
                <p>O Implante de Oclusão do Apêndice Atrial Esquerdo (OAAE) é um procedimento, feito uma única vez, que
                    reduz o risco de acidente vascular cerebral (AVC) em 84% para pessoas diagnosticadas com a
                    Fibrilação Atrial não causada por um problema da válvula cardíaca. É uma alternativa aos
                    anticoagulantes orais.</p>
                <p>O implante OAAE evita que as células do sangue se juntem e formem coágulos na região do coração
                    chamada apêndice atrial esquerdo (AAE), reduzindo o risco de sofrer um AVC e libertando você dos
                    efeitos colaterais dos anticoagulantes orais.</p>
            </div>

            <p class="color-blue mt-5 " style="font-weight: bolder">Assista a este vídeo e descubra como funciona,<br>como
                é implantado e os benefícios que o OAAE oferece ao seu coração.</p>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/BBojH3xIhl8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            <p>https://youtu.be/BBojH3xIhl8</p>

            <h3 class="mb-3 color-blue mt-5">Como o Implante Oclusor do Apêndice Auricular<br>Esquerdo (OAAE) ajuda a
                reduzir o risco de AVC?</h3>
        </div>
    </div>


    <div class="container-fluid pt-70  pb-70">
        <div class="row justify-content-center text-center ">

            <div class="col-lg-4 bg-color-blue text-right" style="padding:100px 80px 80px 0px;">
                <h4 class="co-white">O Implante Oclusor do Apêndice Auricular Esquerdo (OAAE) foi projetado para fechar permanentemente sua AAE e evitar a fuga desses coágulos de sangue.</h4>
            </div>

            <div class="col-lg-8 text-left" style="background-color:#023970;padding:80px 80px 80px 80px;">
                <h4 class=" color-blue">Dispositivo permanente que não precisa ser trocado nunca</h4>
                <ul  class="co-white">
                    <li>Tem o tamanho de uma moeda</li>
                    <li>Está feito de materiais muito leves e compactos comumente usados em muitos outros implantes médicos</li>
                    <li>Ideal para pessoas que não podem tomar    anticoagulantes, sofreram hemorragias devido ao uso de anticoagulantes, têm dificuldade em manter o uso da Varfarina ou não são adequados ao tratamento com qualquer tipo de anticoagulante.</li>
                    <li>É um procedimento de aproximadamente 1 hora, onde os pacientes geralmente saem do hospital no dia seguinte.</li>
                </ul>
            </div>

        </div>
    </div>


    @include('web.components.newsletter')

@endsection
