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
                            <h1>Arritmia Atrial</h1>
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
                <h3 class="co-red mb-3">Qual é a diferença entre as arritmias supraventriculares (TSV) como o flutter atrial e a fibrilação atrial?</h3>


                <p>É normal que sua frequência cardíaca varie durante o dia, dependendo do seu nível de atividade. Por exemplo, você pode esperar que sua frequência cardíaca aumente quando está se exercitando, mas não quando está sentado.</p>
                <p>Qualquer tipo de ritmo ou frequência cardíaca anormal é chamado de arritmia. Ritmos cardíacos anormais rápidos, com frequências acima de 100 bpm, são denominados taquiarritmias. Taquicardia supraventricular (TSV) é um termo geral para qualquer ritmo cardíaco rápido vindo de um local acima dos ventrículos.</p>
                <p>Qualquer pessoa pode desenvolver uma arritmia, mesmo um jovem, sem uma condição cardíaca prévia. Entretanto, as arritmias são mais comuns em pessoas com mais de 65 anos que sofreram algum dano cardíaco em face de um ataque cardíaco, cirurgia cardíaca ou outras condições. As taquicardias supraventriculares incluem:</p>

                <ul class="list-style text-left">
                    <li>Fibrilação atrial;</li>
                    <li>Flutter atrial;</li>
                    <li>Taquicardia atrioventricular por reentrada nodal (TRN);</li>
                    <li>Síndrome de Wolff-Parkinson-White (WPW).</li>
                </ul>

                <iframe class="mt-4" width="560" height="315" src="https://www.youtube.com/embed/WpUQTcTS5DQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>https://www.youtube.com/watch?v=WpUQTcTS5DQ</p>

            </div>
        </div>
    </div>


    <div class="about-what-find-blue co-bg-red" id="2">
        <div class="container  pb-30">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Sintomas</h3>
                <p class="co-white">Algumas pessoas com FA não sentirão nenhum sintoma. Aqueles que têm sintomas podem
                    experimentar:
                </p>


                <div class="col-5">
                    <ul class="list-style text-left">
                        <li class="text-white">Desmaios</li>
                        <li class="text-white">Tontura, sensação de desmaio</li>
                        <li class="text-white">Coração desenfreado (palpitações)</li>
                        <li class="text-white">Batimentos cardíacos faltantes ou extras</li>
                        <li class="text-white">Fraqueza</li>
                        <li class="text-white">Falta de ar</li>
                        <li class="text-white">Dor no peito</li>
                    </ul>
                </div>

                <p class="co-white">Você conhece o seu corpo bem o suficiente para saber quando algo está errado. Por isso você deve se consultar com seu médico se estiver tendo qualquer um desses sintomas. O médico talvez queira examinar seu sistema de condução a fim de determinar as melhores opções de tratamento.
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
                <h3 class="co-red mb-3">Causas</h3>
                <p>Pressão arterial alta, doença arterial coronariana e outras condições cardíacas e pulmonares estão associadas com as arritmias atriais.</p>
                <p>Conforme vamos envelhecendo, o risco de arritmias atriais parece aumentar, especialmente depois dos 60 anos. Pressão arterial alta e doença arterial coronariana estão associadas com arritmias atriais, assim como outras condições cardíacas e pulmonares, tais como doença pulmonar crônica, doença das válvulas cardíacas e insuficiência cardíaca.</p>
                <p>Pessoas sem doença cardíaca podem desenvolver uma arritmia por causas desconhecidas, mas os fatores de risco podem incluir:</p>

                <ul class="list-style text-left">
                    <li>Estresse emocional</li>
                    <li>Consumo de álcool, cafeína, remédios para regime e tabaco</li>
                    <li>Alguns medicamentos de prescrição, tais como certos medicamentos para gripe, tosse e alergia, e antidepressivos</li>
                </ul>

                <p>Além disso, alguns ritmos estão presentes no nascimento, como a síndrome de Wolff Parkinson White, na qual um grupo de batimentos cardíacos rápidos e irregulares é causado por vias de condução elétrica extras entre os átrios e os ventrículos.</p>


            </div>
        </div>
    </div>



    <div class="pt-70 pb-70 bg-gray"  id="4">
        <div class="container">
            <div class="section-title">
                <h3 class="co-red mb-3">Fatores de risco</h3>
            </div>
            <div class="container text-center">



            </div>
        </div>
    </div>

    <div class="about-what-find-blue"  id="5">
        <div class="container pt-70  pb-70">
            <div class="row justify-content-center text-center">

                <h3 class="co-white">Tratamentos</h3>

                <p class="co-white">O tratamento para arritmias atriais depende muito de você e de seus sintomas. Geralmente, o médico se concentra em tratamentos que ajudam a controlar a frequência cardíaca e a reduzir o risco de coágulos.</p>
                <p class="co-white">Vários fatores são considerados na determinação do método de tratamento apropriado:</p>

                <div class="col-5">
                    <ul class="list-style text-left">
                        <li class="text-white">Idade;</li>
                        <li class="text-white">Saúde geral;</li>
                        <li class="text-white">Histórico médico pessoal e familiar;</li>
                        <li class="text-white">Medicamentos utilizados para outras condições;</li>
                        <li class="text-white">Doenças ou condições adjacentes que possam contribuir com a arritmia;</li>
                        <li class="text-white">A natureza e a severidade da arritmia e seus sintomas.</li>
                    </ul>
                </div>

                <p class="co-white">As opções possíveis de tratamento incluem um tratamento ou uma combinação de tratamentos.</p>

                <b class="co-white">Mudanças no Estilo de Vida</b>
                <p class="co-white">Os tratamentos podem ajudar a melhorar ou a reduzir a ocorrência de uma arritmia. Eles podem incluir uma dieta alimentar mais saudável, limitar ou eliminar a quantidade de cafeína ingerida, exercícios regulares e parar de fumar.</p>

                <b class="co-white">Medicamentos</b>
                <p class="co-white">Afinadores do sangue (anticoagulantes), tais como a varfarina, são uma prescrição comum para evitar que o sangue se junte e forme um coágulo.</p>
                <p class="co-white">Dois outros tipos de medicamento são usados para tratar arritmias: antiarrítmicos, que controlam o ritmo do coração, e beta-bloqueadores, que controlam a frequência na qual o coração bate. Eles podem ser utilizados sozinhos ou juntamente com outros tratamentos.</p>

                <b class="co-white">Cardioversão</b>
                <p class="co-white">A cardioversão utiliza energia elétrica para levar uma arritmia de volta a um ritmo normal. Ao administrar um choque elétrico controlado através do peito para o coração, os cardioversores levam o coração de volta a seu ritmo normal. Isso é feito em um hospital com o paciente sob forte sedação. Durante emergências, o choque pode ser administrado através de um desfibrilador externo automático, ou DEA.</p>

                <b class="co-white">Ablação Cardíaca</b>
                <p class="co-white">Para muitos pacientes com arritmias atriais, os medicamentos não conseguem controlar a arritmia com eficiência ou podem levar a efeitos colaterais sérios. Para esses indivíduos, um procedimento denominado ablação cardíaca pode ser considerado. Na ablação cardíaca, um cateter é posicionado dentro do coração para administrar terapia no tecido responsável pela arritmia.</p>
                <p class="co-white">Depois de um procedimento de ablação, alguns pacientes podem precisar de um marcapasso.</p>

            </div>
        </div>
    </div>

    <div class="pt-70 about-what-find  pb-70">
        <div class="container text-center">
            <div class="section-title">
                <h3 class="mb-3 color-blue">Objetivos dos Tratamentos</h3>
            </div>

            <div class="row">
                <p>Existem três objetivos terapêuticos a serem considerados em pacientes com fibrilação atrial (FA):  controle da frequência, manutenção do ritmo sinusal e prevenção de tromboembolia. Os riscos e os benefícios de cada tratamento devem ser analisados e considerados para cada paciente..</p>

                <b>Controle da Frequência Ventricular</b>
                <p>Em pacientes sem pré-excitação ventricular, o controle agudo da frequência é eficaz com bloqueadores do canal de cálcio (BCCs) ou bloqueadores. A ablação por cateter pode ser efetiva e é recomendada em pacientes que não responderam às drogas utilizadas para controlar a frequência ou que são intolerantes a elas.</p>

                <b>Restauração e Manutenção do Ritmo Sinusal</b>
                <p>Vários medicamentos podem restaurar e manter com eficácia o ritmo sinusal em pacientes com FA. Existem também abordagens não-farmacológicas para a prevenção da FA, que incluem cirurgia, estimulação atrial e ablação por cateter.</p>

                <b>Redução do Risco Tromboembólico</b>
                <p>As diretrizes de tratamento para pacientes com FA incluem a recomendação para o tratamento com anticoagulantes orais para os pacientes com um ou mais fatores de risco de derrame. Estudos de pacientes submetidos a oclusão do apêndice atrial esquerdo mostram uma tendência para a redução de eventos embólicos, oferecendo, assim, aos médicos e pacientes, uma outra opção de tratamento.</p>
            </div>

        </div>
    </div>


    @include('web.components.newsletter')

@endsection
