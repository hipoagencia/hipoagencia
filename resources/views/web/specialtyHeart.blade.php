@extends('web.master.master')

@section('content')


    <div class="main-banner-area">
        <div class="main-banner-item specialities-banner specialities-banner-heart">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">

                        <div class="main-banner-content specialities-inside-content">
                            <img src="{{url(asset('web/assets/images/boston/ico/3.png'))}}" class="ico-img"><br><br>
                            <h1>Doenças do Coração</h1>
                            <p>Tudo o que você precisa saber sobre as principais condições clínicas, direto de médicos e
                                especialistas. Isso sim é saúde.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="specialities-content pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="f-22">
                    Doenças cardiovasculares são um conjunto de problemas que atingem o coração e os vasos sanguíneos e representam uma das maiores causas de morte em todo mundo.
                </span>
            </div>
        </div>
    </div>


    <div class="specialities-red">
        <div class="container  pb-40">
            <div class="row justify-content-center0">

                <div class="col-lg-4 text-center about-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico1.png')) }}" class="w-50"/>
                    <h5>
                        17,9 milhões de pessoas morrem a cada de doenças
                        cardio vasculares.
                    </h5>
                </div>

                <div class="col-lg-4 text-center specialities-red-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico2.png')) }}" class="w-50"/>
                    <h5>
                        1 em cada 10 pessoas
                        com idades entre 30 e
                        70 morrem de doenças
                        cardiovasculares.
                    </h5>

                </div>

                <div class="col-lg-4 text-center about-box-top">
                    <img src="{{ url(asset('web/assets/images/boston/specialities/ico3.png')) }}" class="w-50"/>
                    <h5>
                        31% de todas as mortes são por doenças
                        cardiovasculares.
                    </h5>

                </div>


            </div>
        </div>
    </div>



    <div class="pt-70 pb-70 bg-gray">
        <div class="container">
            <div class="section-title">
                <h2 style="color: #ac1d2e;">Condições Clínicas</h2>
                <span class="f-22 mt-2">
                    Selecione a patologia desejada e saiba mais sobre causas, sintomas, tratamentos
                    e formas de prevenir as principais doenças cardíacos.
                </span>
            </div>
            <div class="row justify-content-center text-center">

                <a href="{{ route('web.page.fibrilacaoArterial') }}" style="background-color: #ac1d2e;" class="btn-conditions">Fibrilação Atrial</a>
                <a href="#" style="background-color: #ac1d2e;" class="btn-conditions">AVC</a>
                <a href="#" style="background-color: #ac1d2e;" class="btn-conditions">Morte Súbita</a>

            </div>
        </div>
    </div>

    <div class="pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title text-left">
                        <h3 class="color-gray2">ÚLTIMOS ARTIGOS</h3>
                    </div>
                </div>
                <div class="col-lg-8">

                    <a href="{{ route('web.category', ['slug' => 'sistema-nervoso','id' => '2']) }}" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
                            class="bx bxs-chevron-right"></i><span></span></a>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach($posts as $post)
                    <div class="col-lg-4">
                        @include('web.components.post')
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    @include('web.components.newsletter')

@endsection
