@extends('web.master.master')

@section('content')


    <section class="half-section wow animate__fadeIn page-title-colorful"
             data-backgroundcolor="#1c1c1c,#363636,#1c1c1c,#363636">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-end extra-small-screen">
                <div class="w-100 w-md-50 align-self-end page-title-extra-small">
                    <h1 class="alt-font text-white position-relative padding-85px-left padding-15px-right sm-padding-55px-left margin-30px-bottom sm-margin-20px-bottom">
                        <span class="page-title-separator-line bg-white w-70px sm-w-40px"></span>Blog</h1>
                </div>
                <div class="w-100 w-md-50 align-self-end">
                    <h4 class="alt-font text-white font-weight-500 margin-30px-bottom">Fique por dentro das novidades do
                        universo da publicidade online e offline</h4>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-right-side-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">


                    @foreach($posts as $post)

                        @include('web.components.postBlog')

                    @endforeach


                    <div class="row">
                        {{ $posts->render("pagination::bootstrap-4") }}
                    </div>
                </div>
                <!-- start sidebar -->
                <aside
                    class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">

                    <div class="d-inline-block w-100 margin-5-rem-bottom">
                        <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Pesquisar</span>
                        <form action="{{ route('web.search') }}" method="GET">
                            <div class="position-relative">
                                <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" placeholder="Insira o termo..." name="search" value="" type="text" autocomplete="off">
                                <button type="submit" class="bg-transparent btn text-dark-gray position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ms-0"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="border-all border-color-medium-gray border-radius-4px padding-40px-all text-center margin-5-rem-bottom xs-margin-35px-bottom">
                        <img src="{{url(asset('web/assets/images/avtar29.jpg'))}}" alt="" class="rounded-circle margin-5px-bottom w-100px d-block mx-auto" data-no-retina="">
                        <span class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">Mr. Hipo</span>
                        <span class="text-medium d-block line-height-18px margin-20px-bottom">Fundador</span>
                        <div class="social-icon-style-02 text-center">
                            <ul class="extra-small-icon">
                                <li class="mx-0"><a class="facebook" href="http://facebook.com/hipoagencia" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                <li class="mx-0"><a class="instagram" href="https://www.instagram.com/hipoagencia/" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn"
                         style="visibility: visible; animation-name: fadeIn;">
                        <span
                            class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Categorias</span>
                        <ul class="list-style-07 list-unstyled">

                            @foreach($categories as $category)
                                <li><a href="{{ route('web.category', ['slug' => $category['slug'],'id' => $category['id']]) }}">{{$category['name']}}</a></li>
                            @endforeach

                        </ul>
                    </div>

                </aside>
                <!-- end sidebar -->
            </div>
        </div>
    </section>


    <style>
        .page-item.active .page-link{
            background-color: #1c1c1c !important;
            border-color: #1c1c1c !important;
        }

    </style>

    {{--    @include('web.components.clients')--}}

    {{--    @include('web.components.form')--}}


@endsection

