@extends('web.master.master')

@section('content')


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url(asset('web/assets/images/boston/article/slider1.jpg')) }}" class="d-block w-100"
                     alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ url(asset('web/assets/images/boston/article/slider1.jpg')) }}" class="d-block w-100"
                     alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ url(asset('web/assets/images/boston/article/slider1.jpg')) }}" class="d-block w-100"
                     alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="pt-70 pb-70">
        <div class="container">
            <div class="row pb-70">
                <div class="text-left">
                    <h2>Filtrar por especialidade</h2>
                    <span>
                        Clique para exibir apenas artigos de uma especialidade clínica.
                    </span>
                </div>
            </div>
            <div class="row justify-content-center specialities2-links">

                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer">
                    <a href="{{ route('web.category', ['slug' => 'sistema-nervoso','id' => '1']) }}"><img src="{{ url(asset('web/assets/images/boston/ico/1.png')) }}"/></a>
                    <h5>Sistema Nervoso</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer">
                    <a href="{{ route('web.category', ['slug' => 'coracao','id' => '2']) }}"><img src="{{ url(asset('web/assets/images/boston/ico/3.png')) }}"/></a>
                    <h5>Coração<br class="d-lg-none"/><br class="d-lg-none"/></h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2">
                    <a href="{{ route('web.category', ['slug' => 'sistema-urinario','id' => '3']) }}"><img src="{{ url(asset('web/assets/images/boston/ico/2.png')) }}"/></a>
                    <h5>Sistema Urinário</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2">
                    <a href="{{ route('web.category', ['slug' => 'canceres-e-tumores','id' => '4']) }}"><img src="{{ url(asset('web/assets/images/boston/ico/4.png')) }}"/></a>
                    <h5>Cânceres e Tumores</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2">
                    <a href="{{ route('web.category', ['slug' => 'saude-sexual','id' => '5']) }}"><img src="{{ url(asset('web/assets/images/boston/ico/5.png')) }}"/></a>
                    <h5>Saúde Sexual</h5>
                </div>

            </div>
{{--            <div class="row justify-content-center specialities2-links">--}}

{{--                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer"--}}
{{--                     onclick="openBrain()">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/ico/1.png')) }}"/>--}}
{{--                    <h5>Sistema Nervoso</h5>--}}
{{--                </div>--}}
{{--                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer"--}}
{{--                     onclick="openHeart()">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/ico/3.png')) }}"/>--}}
{{--                    <h5>Coração<br class="d-lg-none"/><br class="d-lg-none"/></h5>--}}
{{--                </div>--}}
{{--                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer"--}}
{{--                     onclick="openUrine()">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/ico/2.png')) }}"/>--}}
{{--                    <h5>Sistema Urinário</h5>--}}
{{--                </div>--}}
{{--                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer"--}}
{{--                     onclick="openCancer()">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/ico/4.png')) }}"/>--}}
{{--                    <h5>Cânceres e Tumores</h5>--}}
{{--                </div>--}}
{{--                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer"--}}
{{--                     onclick="openSexual()">--}}
{{--                    <img src="{{ url(asset('web/assets/images/boston/ico/5.png')) }}"/>--}}
{{--                    <h5>Saúde Sexual</h5>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>
    </div>


    @include('web.components.categoriesSlide')


    <div class="pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title text-left">
                        <h3 class="color-gray2">ÚLTIMOS ARTIGOS</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <a href="#" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
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

    <div class="container">
        <div class="row">
            {{ $posts->render("pagination::bootstrap-4") }}
        </div>
    </div>

@endsection


@section('js')



@endsection
