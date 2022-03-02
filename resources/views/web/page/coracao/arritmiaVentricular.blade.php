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
                            <h1>Arritmia Ventricular</h1>
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
                <a href="#1" class="bs-wizard-dot" style="background-color:#ac1d2e;"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#ac1d2e;">O que é</h5></div>
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
                <a href="#3" class="bs-wizard-dot"></a>
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
                <h3 class="co-red mb-3">O que é arritmia ventricular?</h3>


                <p>Quando um ritmo cardíaco anormal vem das câmaras inferiores do coração (os ventrículos), ele é chamado de arritmia ventricular. Os ritmos desse tipo incluem a taquicardia ventricular (TV) e a fibrilação ventricular (FV). Ambas são arritmias que colocam a vida em risco e estão normalmente associadas a ataques cardíacos ou a cicatrizes do músculo cardíaco advindas de um ataque cardíaco prévio.</p>

                <div class="row mt-5">
                    <div class="col">
                        <img src="{{url(asset('web/assets/images/boston/heart/ventricular_1.jpg'))}}" alt="">
                    </div>
                    <div class="col text-left">
                        <h5 class="co-red mb-3">Taquicardia Ventricular</h5>

                        <p>A taquicardia ventricular (TV) é um ritmo cardíaco rápido que ocorre em um dos ventrículos de seu coração. Ela parece um circuito elétrico pequeno que corre em círculo. Em uma taquicardia ventricular, o coração bate a cada volta no circuito em frequências de 150 a 250 bpm.Um tipo especial de taquicardia ventricular é denominado â taquicardia da via de saída do ventrículo direito ou taquicardia VSVD. Esse ritmo ocorre na parte do coração onde o sangue vai do ventrículo direito para os pulmões.À medida que o coração bate mais rápido, ele bombeia menos sangue, não havendo tempo suficiente para ele se encher com sangue entre os batimentos. Se esse batimento cardíaco rápido continuar, o cérebro e o corpo podem não receber sangue e oxigênio suficientes.</p>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col text-left">
                        <h5 class="co-red mb-3">Fibrilação Ventricular</h5>

                        <p>Outro tipo de arritmia ventricular é a fibrilação ventricular (FV). A fibrilação ventricular se origina de muitos locais diferentes nos ventrículos, cada um tentando sinalizar o coração para bater. Nesse caso, o coração bate muito mais rápido que o normal, às vezes acima de 300 batimentos por minuto. As câmaras inferiores tremem ao invés de se contraírem e pouquíssimo, ou nenhum sangue é bombeado do coração para o restante do corpo. Se seu coração estiver em fibrilação ventricular, você pode ficar inconsciente muito rapidamente. Você provavelmente não se lembrará de nada que aconteceu antes ou durante o episódio.</p>
                        <p>Se esses ritmos cardíacos rápidos e irregulares continuarem por algum tempo, o corpo não receberá suficiente sangue rico em oxigênio. Sem oxigênio, o cérebro e os tecidos do corpo não conseguem funcionar normalmente e morrem.</p>

                    </div>
                    <div class="col">
                        <img src="{{url(asset('web/assets/images/boston/heart/ventricular_2.jpg'))}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-red" id="2">
        <div class="container  pb-30">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Sintomas</h3>
                <p class="co-white col-7">Se esses ritmos cardíacos rápidos e irregulares continuarem por algum tempo, o corpo não receberá suficiente sangue rico em oxigênio. Sem oxigênio, o cérebro e os tecidos do corpo não conseguem funcionar normalmente e morrem.
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
                <h3 class="co-red mb-3">Causas e Fatores de Risco</h3>

                <p>As arritmias ventriculares surgem quando impulsos elétricos gerados nos ventrículos assumem o lugar do padrão normal gerado pelo nó sinoatrial (S-A) e pelo sistema de condução elétrico do coração. Estudos mostram que taquicardias ventriculares (TV) ocorrem com frequência em pacientes que sofreram algum dano no coração por ataque cardíaco, cirurgia cardíaca ou outras condições. Algumas pessoas com defeitos cardíacos congênitos também sofrem taquicardia ventricular. Algumas vezes, a taquicardia ventricular afeta pessoas sem nenhum histórico de condição cardíaca.</p>

                <p>Nos casos de fibrilação ventricular (FV), os pacientes normalmente perdem a consciência muito rapidamente.</p>

                <p>Se um ritmo ventricular rápido não for tratado, ele pode mudar para fibrilação ventricular, podendo levar a uma parada cardíaca súbita e, por fim, a morte cardíaca súbita. A parada cardíaca súbita afeta 350.000 pessoas a cada ano nos Estados Unidos (o que significa que a cada 1,5 minutos alguém morre de parada cardíaca súbita).<sup>1</sup></p>

            </div>
        </div>
    </div>



    <div class="about-what-find-blue"  id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <h3>Tratamentos</h3>

                <p class="co-white">Para o tratamento de arritmias ventriculares, os médicos podem prescrever medicamentos, um cardioversor desfibrilador implantável ou ambos.</p>
                <p class="co-white">A taquicardia ventricular e a fibrilação ventricular são ritmos cardíacos que põem a vida em risco. Nas emergências, os paramédicos ou as equipes médicas conseguem tratar essas arritmias com desfibriladores externos, como um DEA. As opções de tratamento a longo prazo variam de acordo com o tipo de arritmia e as circunstâncias individuais de cada paciente.</p>
                <p class="co-white">Algumas vezes, as taquiarritmias podem ser paradas ou tratadas com remédios, ou cirurgia ou ablação cardíaca. Esses tratamentos são utilizados em um esforço para controlar ou destruir a porção de tecido cardíaco que causa os ritmos anormais.</p>
                <p class="co-white">Em outros casos, um dispositivo eletrônico implantado pode ser usado para tratar a arritmia. Um cardioversor desfibrilador implantável (CDI) administra energia elétrica ao coração a fim de baixar seu ritmo para um ritmo mais normal, possibilitando ao nó sinoatrial retomar o controle.Um CDI pode usar um ou mais tipos de energia para ajudar seu coração a bater novamente de uma maneira normal. Essas energias incluem:</p>
                <p class="co-white">Estimulação antitaquicardia (ATP) - Se seu ritmo for regular, mas rápido, o sistema CDI pode administrar uma série de pulsos pequenos e rápidos de estimulação elétrica. Tais pulsos são utilizados para interromper a arritmia e retornar o coração a seu ritmo normal.</p>
                <p class="co-white">Cardioversão - Se sua arritmia for regular, mas muito rápida, o CDI pode administrar um choque de baixa energia. Tal choque consegue parar a arritmia e retornar o coração a seu ritmo normal.</p>
                <p class="co-white">Desfibrilação - Para arritmias muito rápidas e irregulares, como a fibrilação ventricular, choques de alta energia podem ser utilizados para parar a arritmia. Dessa maneira, o coração consegue retornar a seu ritmo normal. </p>



            </div>
        </div>
    </div>

    <div class="about-what-find-blue " style="background-color:#023970 !important;" id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                 <p class="co-white">Muitas pessoas têm arritmias perigosas e que podem ocorrer a qualquer momento. Você já pode ter tido um episódio de taquicardia ventricular ou fibrilação ventricular. Ele pode ocorrer mesmo se você estiver tomando remédios para tratar seu ritmo cardíaco anormal. Após analisar os resultados de seus exames, o médico pode chegar à conclusão que você poderá novamente ter ritmos cardíacos anormais e, talvez, uma parada cardíaca. Talvez ele recomende um CDI por uma ou mais das seguintes razões:</p>

                <div class="row mt-3">
                    <div class="col-6">
                        <ul class="list-style text-left">
                            <li class="text-white">No mínimo, um evento de taquicardia ventricular ou fibrilação ventricular</li>
                            <li class="text-white">Parada cardíaca ou ritmo cardíaco anormal, prévios, que fizeram você desmaiar</li>
                            <li class="text-white">Um ritmo cardíaco rápido que se repete, podendo levar à morte</li>
                            <li class="text-white">Um ritmo cardíaco rápido que não pode ser controlado com medicamentos</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-style text-left">
                            <li class="text-white">Efeitos colaterais severos da terapia medicamentosa</li>
                            <li class="text-white">Um ritmo cardíaco rápido que não pode ser curado cirurgicamente</li>
                            <li class="text-white">Ataque cardíaco prévio e uma fração de ejeção baixa </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>




    @include('web.components.newsletter')

@endsection
