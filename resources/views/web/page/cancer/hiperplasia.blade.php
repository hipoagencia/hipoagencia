@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div class="main-banner-item  pb-70"
             style="background-image:none !important;background-color: #ff7200 !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">

                        <div class="main-banner-content specialities-inside-content">
                            <img src="{{url(asset('web/assets/images/boston/ico/4.png'))}}" class="ico-img"><br><br>
                            <h1>Hiperplasia Prostática Benigna</h1>
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
                <a href="#1" class="bs-wizard-dot" style="background-color:#ff7200;"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#ff7200;">O que é</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- complete -->
                <div class="text-center bs-wizard-stepnum">2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#2" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#ff7200;">Sintomas</h5></div>
            </div>

            <div class="col bs-wizard-step "><!-- complete -->
                <div class="text-center bs-wizard-stepnum">3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#3" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#ff7200;">Causas</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- active -->
                <div class="text-center bs-wizard-stepnum">4</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#4" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#ff7200;">Fatores de Risco</h5></div>
            </div>

            <div class="col bs-wizard-step disabled"><!-- active -->
                <div class="text-center bs-wizard-stepnum">5</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#5" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#ff7200;">Tratamento</h5></div>
            </div>
        </div>


    </div>



    <div class="pt-70 about-what-find" id="1">
        <div class="container pb-40">
            <div class="section-title">
                <h3 class="co-orange mb-3">A hiperplasia prostática benigna pode ser solucionada.</h3>
                <p>Um dos sinais mais comuns do envelhecimento em homens. Uma doença que tem muitas soluções e tratamentos e que não deve assustar.</p>
                <p>Ouse dar um passo pela sua saúde e enfrente a hiperplasia prostática benigna.</p>

                <h5 class="co-orange mb-3">O que é?</h5>

                <p>A hiperplasia prostática benigna (HPB) é uma consequência natural do envelhecimento. A próstata dobra de tamanho durante a adolescência e continua a crescer ao longo da vida.</p>
                <p>Com o tempo, uma próstata aumentada pode comprimir o pequeno tubo que leva a urina da bexiga ao pênis e restringir o fluxo de urina.</p>
                <p>Uma próstata aumentada pode interferir nos processos urinários normais, como enchimento e esvaziamento. Se não for tratada, pode causar problemas na bexiga ou nos rins.</p>
                <p>Embora as causas da HPB ainda não sejam claras, é uma doença muito comum, pois 90% dos homens entre 50 e 80 anos de idade possivelmente a sofrerão.</p>
                <p>A HPB afeta 90% dos homens aos 85 anos de idade.</p>
                <p>Idade, histórico familiar de problemas de próstata, obesidade e doenças crônicas, como diabetes e doenças cardíacas, podem aumentar o risco de aumento da próstata. Ignorar esses fatores e sintomas relacionados pode levar a complicações graves.</p>

            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-orange" id="2">
        <div class="container">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Sintomas</h3>

                <p class="co-white">
                    Levantar-se várias vezes para urinar durante a noite
                </p>

                <p class="co-white">
                    Jato de urina fraco e interrompido
                </p>

                <p class="co-white">
                    Dificuldade em iniciar ou parar de urinar
                </p>

                <p class="co-white">
                    Necessidade repentina e urgente de urinar
                </p>

                <p class="co-white">
                    Não ter certeza de que a bexiga está vazia
                </p>

                <p class="co-white">
                    Gotejamento pós-micção
                </p>

                <p class="co-white">
                    Dor ou ardência ao urinar
                </p>

                <p class="co-white">
                    Incapacidade de ir ao banheiro quando sente necessidade.
                </p>

                <p class="co-white">
                    Falta de controle da micção
                </p>

                <h3 class="co-white">Diagnóstico</h3>

                <p  class="co-white">Estes são os métodos de diagnóstico pelo urologista:</p>


                <p  class="co-white"><b>Um gráfico de frequência e volume urinário:</b> Isso fornecerá um registro de quanta água você bebe normalmente, quanta urina produz, com que frequência você esvazia a bexiga diariamente e se há vazamentos.</p>
                <p  class="co-white"><b>Exame de toque retal:</b> O urologista insere um dedo no reto para ver se a próstata está aumentada.</p>
                <p  class="co-white"><b>Análise de urina:</b> Testar uma amostra de urina pode ajudar a descartar infecções ou outras condições que podem causar sintomas similares.</p>
                <p  class="co-white"><b>Análise de sangue:</b> Os resultados podem indicar problemas renais.</p>
                <p  class="co-white"><b>Exame de sangue para antígeno específico da próstata (PSA):</b> O PSA é uma substância produzida pela próstata. Os níveis de PSA aumentam quando a próstata aumenta de tamanho. Entretanto, os níveis elevados de PSA também podem ser devido a intervenções recentes, infecção, cirurgia ou câncer de próstata.</p>


                <p  class="co-white"><i>A hiperplasia prostática benigna é o tumor benigno mais comum em homens.</i></p>
                <p  class="co-white"><i>Ela tem uma prevalência que varia entre 8% em homens de 40 anos, 50% em homens entre 51 e 60 anos, e 90% a partir dos 80 anos.</i></p>

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
                <h3 class="co-orange mb-3">Causas</h3>




            </div>
        </div>
    </div>







    <div class="about-what-find-blue" id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <div class="col-8">
                    <h3 class="co-white">Tratamentos</h3>

                    <h5 class="co-white">Medicamentos</h5>

                    <p class="co-white">
                        Os medicamentos são o tratamento mais comum para os sintomas leves a moderados de hiperplasia prostática. Algumas das opções são:
                    </p>

                    <ul class="col list-style mt-3">
                        <li class="text-white">Bloqueadores alfa</li>
                        <li class="text-white">Inibidores de 5-alfa redutase</li>
                        <li class="text-white">Incisão transuretral da próstata</li>
                        <li class="text-white">Terapia transuretral por micro-ondas</li>
                        <li class="text-white">Ablação por agulha transuretral</li>
                    </ul>

                    <h5 class="co-white">Terapia a laser verde</h5>
                    <p class="co-white">
                        Um laser de alta energia vaporiza o excesso de tecido protético. A terapia a laser geralmente alivia os sintomas imediatamente e tem menos risco de efeitos colaterais do que a cirurgia sem laser. A terapia a laser pode ser utilizada em homens que não sejam candidatos a outros procedimentos.
                    </p>

                    <h5 class="co-white">Ressecção transuretral</h5>
                    <p class="co-white">
                        Consiste na extração de uma parte da glândula pelo canal uretral do pênis. É uma técnica cirúrgica conservadora e não obtém os mesmos resultados em longo prazo da prostatectomia radical.
                    </p>

                    <h5 class="co-white">Prostatectomia aberta ou assistida por robô</h5>
                    <p class="co-white">
                        O cirurgião faz uma incisão na parte inferior do abdômen para alcançar a próstata e remover o tecido. A prostatectomia aberta geralmente é feita se você tiver uma próstata muito grande, lesões na bexiga ou outras complicações. A cirurgia geralmente requer uma curta internação no hospital e está associada a um maior risco de exigir uma transfusão de sangue.
                    </p>

                    <h5 class="co-white">Quer saber mais?</h5>
                    <p class="co-white">
                        Para entender a extensão da situação, assista a gravação da LIVE: Próstata Aumentada e tire todas as suas dúvidas.
                    </p>

                    <iframe class="mt-3" width="560" height="315" src="https://www.youtube.com/embed/S893VRd8-Xw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>





    @include('web.components.newsletter')

@endsection
