@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div class="main-banner-item  pb-70"
             style="background-image:none !important;background-color: #1bb166 !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">

                        <div class="main-banner-content specialities-inside-content">
                            <img src="{{url(asset('web/assets/images/boston/ico/2.png'))}}" class="ico-img"><br><br>
                            <h1>Incontinência Urinária</h1>
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
                <a href="#1" class="bs-wizard-dot" style="background-color:#1bb166;"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#1bb166;">O que é</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- complete -->
                <div class="text-center bs-wizard-stepnum">2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#2" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#1bb166;">Sintomas</h5></div>
            </div>

            <div class="col bs-wizard-step "><!-- complete -->
                <div class="text-center bs-wizard-stepnum">3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#3" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#1bb166;">Causas</h5></div>
            </div>

            <div class="col bs-wizard-step"><!-- active -->
                <div class="text-center bs-wizard-stepnum">4</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#4" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#1bb166;">Fatores de Risco</h5></div>
            </div>

            <div class="col bs-wizard-step disabled"><!-- active -->
                <div class="text-center bs-wizard-stepnum">5</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#5" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center"><h5 style="color:#1bb166;">Tratamento</h5></div>
            </div>
        </div>


    </div>



    <div class="pt-70 about-what-find" id="1">
        <div class="container pb-40">
            <div class="section-title">
                <h3 class="co-green mb-3">A incontinência masculina pode ser solucionada.</h3>
                <p>Uma condição que limita a vida de quem a possui, ao não permitir que a levem com regularidade.</p>

                <h5 class="co-green mb-3">O que é?</h5>

                <p>A incontinência urinária - perda involuntária de urina - é um problema comum e frequentemente
                    embaraçoso. A intensidade varia de perder urina ocasionalmente ao tossir ou espirrar, a ter uma
                    vontade tão repentina e forte de urinar que você não consegue chegar ao banheiro a tempo.</p>
                <p>Embora ocorra com mais frequência com o envelhecimento, a incontinência urinária não é uma
                    consequência inevitável do envelhecimento. Se a incontinência urinária afetar suas atividades
                    diárias, não hesite em consultar o seu médico. Para a maioria das pessoas, algumas mudanças simples
                    no estilo de vida ou um tratamento médico podem aliviar o desconforto ou interromper a incontinência
                    urinária.</p>

            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-green" id="2">
        <div class="container">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Sintomas</h3>

                <p class="co-white">Muitas pessoas apresentam pequenos escapes ocasionais de urina. Outros podem ter
                    escapes leves a moderados com mais frequência.</p>
                <h5 class="co-white mt-3">Os tipos de incontinência urinária incluem:</h5>

                <p class="co-white">
                    <b>Incontinência de esforço:</b> A urina vaza quando você pressiona a bexiga ao tossir, espirrar,
                    rir, fazer exercícios ou levantar algo pesado.
                </p>

                <p class="co-white">
                    <b>Incontinência de urgência:</b> Você sente uma necessidade repentina e intensa de urinar, seguida
                    por um escape involuntário de urina.
                </p>

                <p class="co-white">
                    <b>Incontinência de transbordamento:</b> Você tem gotejamento frequente ou constante de urina porque
                    a bexiga não esvazia completamente.
                </p>

                <p class="co-white">
                    <b>Incontinência funcional:</b> Uma deterioração física ou mental impede que você chegue a tempo ao
                    banheiro. Por exemplo, se você tem artrite severa, pode não conseguir desabotoar as calças com
                    rapidez suficiente.
                </p>

                <p class="co-white">
                    <b>Incontinência mista:</b> Você tem mais de um tipo de incontinência urinária.
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
                <h3 class="co-green mb-3">Causas</h3>

                <p>A incontinência urinária não é uma doença, mas um sintoma. Ela pode ser causado por certos hábitos
                    diários, doenças subjacentes ou problemas físicos. Uma avaliação completa por seu médico pode ajudar
                    a determinar o que está causando sua incontinência.</p>
                <p>Certos alimentos, bebidas e medicamentos podem atuar como diuréticos (estimulam a bexiga e aumentam o
                    volume da urina). Alguns deles são:</p>

                <ul class="col list-style mt-3 text-left">
                    <li class="">Álcool</li>
                    <li class="">Cafeína</li>
                    <li class="">Refrigerantes e água mineral com gás</li>
                    <li class="">Adoçantes artificiais</li>
                    <li class="">Chocolate</li>
                    <li class="">Pimentas</li>
                    <li class="">Alimentos ricos em especiarias, açúcar ou ácido, especialmente frutas cítricas</li>
                    <li class="">Medicamentos para pressão arterial e para o coração, sedativos e relaxantes
                        musculares
                    </li>
                    <li class="">Grandes doses de vitamina C</li>
                </ul>

                <h5 class="co-green mt-4 mb-4">A incontinência urinária também pode ser causada por<br>uma condição
                    facilmente tratável, por exemplo:</h5>

                <ul class="col list-style mt-3 text-left">
                    <li class="">Infecção urinária: As infecções podem irritar a bexiga, causar uma forte vontade de
                        urinar e, às vezes, incontinência.
                    </li>
                    <li class="">Prisão de ventre: O reto está localizado próximo à bexiga e compartilha muitos nervos.
                        Fezes duras e compactadas no reto fazem com que esses nervos se tornem excessivamente ativos e
                        aumenta a frequência urinária.
                    </li>

                </ul>

                <h5 class="co-green mt-4 mb-4">Mais causas</h5>

                <ul class="col list-style mt-3 text-left">
                    <li class=""><b>Mudanças devido à idade:</b> O envelhecimento do músculo da bexiga pode diminuir a
                        capacidade de armazenar urina.
                    </li>
                    <li class=""><b>Aumento da próstata:</b> Especialmente em homens mais velhos, a incontinência
                        geralmente decorre de uma glândula prostática aumentada, uma condição conhecida como
                        "hiperplasia prostática benigna".
                    </li>
                    <li class=""><b>Câncer de próstata:</b> Nos homens, a incontinência de esforço ou de urgência pode
                        estar associada ao câncer de próstata não tratado. Porém, com mais frequência, a incontinência é
                        um efeito colateral dos tratamentos do câncer de próstata.
                    </li>
                    <li class=""><b>Obstrução:</b> Um tumor em qualquer parte do trato urinário pode obstruir o fluxo
                        normal de urina e levar à incontinência por transbordamento. Cálculos urinários (nódulos duros
                        semelhantes a pedras que se formam na bexiga) às vezes podem causar escape de urina.
                    </li>
                    <li class=""><b>Problemas neurológicos:</b> Esclerose múltipla, doença de Parkinson, acidentes
                        vasculares cerebrais, tumores cerebrais ou lesão da medula espinhal podem interferir nos sinais
                        nervosos envolvidos no controle da bexiga e causar incontinência urinária.
                    </li>
                </ul>

                <p>
                    <i>Nos homens, a prevalência de incontinência varia de 3% a 11% no geral, e a incontinência de
                        urgência representa entre 40% e 80% de todos os pacientes do sexo masculino.</i>
                </p>
            </div>
        </div>
    </div>



    <div class="pt-70 pb-70 bg-gray" id="4">
        <div class="container">
            <div class="section-title">
                <h3 class="co-green mb-3">Fatores de risco</h3>
            </div>
            <div class="container text-center">

                <p>Os fatores que aumentam o risco de incontinência urinária incluem:</p>
                <div class="row">
                    <div class="col"><br></div>
                    <ul class="col list-style text-left mt-3">
                        <li><b>Sexo:</b> As mulheres têm maior probabilidade de sofrer incontinência de esforço.
                            Entretanto, os homens com problemas de próstata apresentam alto risco de incontinência de
                            urgência e transbordamento.
                        </li>
                        <li><b>Idade:</b> Conforme você envelhece, os músculos da bexiga e da uretra perdem força.</li>
                        <li><b>Estar acima do peso:</b> O excesso de peso aumenta a pressão sobre a bexiga e os músculos
                            ao redor, enfraquecendo-os e causando escape de urina ao tossir ou espirrar.
                        </li>
                        <li><b>Fumar:</b> O consumo de tabaco pode aumentar o risco de incontinência urinária.</li>
                        <li><b>Histórico familiar:</b> Se um parente próximo tem incontinência urinária, especialmente
                            incontinência de urgência, você corre um risco maior de contrair a doença.
                        </li>
                        <li><b>Outras doenças:</b> Doenças neurológicas ou diabetes podem aumentar o risco de
                            incontinência.
                        </li>
                    </ul>
                    <div class="col"><br></div>
                </div>

            </div>
        </div>
    </div>



    <div class="pt-70 about-what-find" id="3">
        <div class="container">
            <div class="section-title pb-40">
                <h3 class="co-green mb-3">Prevenção</h3>

                <p>A incontinência urinária nem sempre pode ser evitada. Entretanto, para diminuir o risco, pode ser
                    útil:</p>

                <ul class="col list-style mt-3 text-left">
                    <li class="">Manter um peso saudável</li>
                    <li class="">Praticar exercícios para o assoalho pélvico</li>
                    <li class="">Evitar alimentos que irritam a bexiga, como cafeína, álcool e alimentos ácidos.</li>
                    <li class="">Comer mais fibras, o que pode prevenir a constipação, uma das causas da incontinência
                        urinária.
                    </li>
                    <li class="">Não fume ou procure ajuda para parar de fumar</li>
                </ul>

            </div>
        </div>
    </div>



    <div class="about-what-find-blue" id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <div class="col-8">
                    <h3 class="co-white">Tratamentos</h3>

                    <p class="co-white">
                        O tratamento da incontinência urinária depende do tipo, da gravidade e da causa subjacente. Provavelmente, será necessária uma combinação de tratamentos. Se a doença pré-existente estiver causando os sintomas, o médico tratará essa doença primeiro.
                    </p>

                    <p class="co-white">
                        Seu médico provavelmente irá sugerir tratamentos menos invasivos no início e passar para outras opções apenas se essas técnicas falharem.
                    </p>

                    <h5 class="co-white">Exercícios para fortalecer os músculos do assoalho pélvico</h5>

                    <p class="co-white">
                        Seu médico pode recomendar que você faça esses exercícios com frequência para fortalecer os músculos que ajudam a controlar a micção. Esses exercícios, também conhecidos como "exercícios de Kegel", são especialmente eficazes no tratamento da incontinência de esforço, mas também podem ser úteis no tratamento da incontinência.
                    </p>

                    <h5 class="co-white">Medicamentos</h5>

                    <p class="co-white">Os medicamentos comumente utilizadospara tratar a incontinência são: </p>

                    <ul class="col list-style mt-3">
                        <li class="text-white">Anticolinérgicos</li>
                        <li class="text-white">Mirabegrona (Myrbetric)</li>
                        <li class="text-white">Bloqueadores alfa</li>
                    </ul>

                    <h5 class="co-white">Cirurgia</h5>

                    <p class="co-white">Se outros tratamentos não funcionarem, existem vários procedimentos cirúrgicos que podem tratar os problemas causadospela incontinência urinária.</p>


                    <h5 class="co-white">Esfíncter urinário artificial</h5>

                    <p class="co-white">Nos homens, um pequeno anel cheio de líquido é implantado ao redor do colo da bexiga para manter o esfíncter urinário fechado até que você esteja pronto para urinar. Para urinar, você pressiona uma válvula implantada sob a pele do escroto, o que faz com que o anel esvazie e permita que a urina flua para fora da bexiga. </p>

                </div>
            </div>
        </div>
    </div>





    @include('web.components.newsletter')

@endsection
