@extends('web.master.master')

@section('content')

    <section class="p-0 one-fifth-screen sm-h-450px xs-h-350px cover-background d-flex align-items-end" style="background-image: url('{{url(asset('web/assets/images/hipo/projetos/header.jpg'))}}');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-6 text-center">
                    <img src="{{url(asset('web/assets/images/single-project-page-02-img1.png'))}}" alt="" class="w-25" data-no-retina="">
                    <h5 class="alt-font text-white margin-5-rem-top margin-9-rem-bottom font-weight-600 text-uppercase d-block xs-margin-3-rem-top xs-margin-5-rem-bottom">Gents club identity</h5>
                    <span class="separator-line-vertical w-100px h-1px d-inline-block align-middle bg-dark-orange xs-w-60px"></span>
                </div>
            </div>
        </div>
    </section>


    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-8 col-lg-3 offset-lg-1 col-md-5 col-sm-6 md-margin-50px-bottom wow animate__fadeIn"
                     data-wow-delay="0.2s" data-enllax-ratio="-.15" data-enllax-type="foreground"
                     data-enllax-direction="horizontal">
                    <img src="{{url(asset('web/assets/images/single-project-page-05-img-24.jpg'))}}" alt=""
                         data-no-retina="">
                </div>
                <div
                    class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start last-paragraph-no-margin wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Early bird coffee
                        identity</h5>
                    <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">Lorem ipsum is simply dummy
                        text of the printing and typesetting industry. lorem ipsum has been the industrys standard dummy
                        text ever since when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries but also leap into typesetting.</p>
                </div>
                <div class="col-12 col-md-12 text-center d-flex flex-row align-items-center margin-4-rem-tb">
                    <span class="w-100 h-1px bg-medium-gray"></span>
                    <img src="{{url(asset('web/assets/images/single-project-page-05-img-07.png'))}}" alt=""
                         data-no-retina="">
                    <span class="w-100 h-1px bg-medium-gray"></span>
                </div>
                <div class="col-12 alt-font text-uppercase text-small font-weight-500 line-height-12px">
                    <div class="row">
                        <div
                            class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray sm-margin-20px-bottom xs-border-none wow animate__fadeIn"
                            style="visibility: visible; animation-name: fadeIn;">
                            <span
                                class="d-block text-extra-dark-gray d-lg-inline-block md-margin-10px-bottom">Data:</span>
                            <span>08 January 2020</span>
                        </div>
                        <div
                            class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray sm-border-none sm-margin-20px-bottom wow animate__fadeIn"
                            data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                            <span
                                class="d-block text-extra-dark-gray d-lg-inline-block md-margin-10px-bottom">Cliente:</span>
                            <span>Early bird coffee</span>
                        </div>
                        <div
                            class="col-12 col-md-3 col-sm-6 text-center border-right border-color-medium-gray xs-border-none sm-margin-20px-bottom wow animate__fadeIn"
                            data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                            <span
                                class="d-block text-extra-dark-gray d-lg-inline-block md-margin-10px-bottom">Segmento:</span>
                            <span>Coffee</span>
                        </div>
                        <div class="col-12 col-md-3 col-sm-6 text-center wow animate__fadeIn" data-wow-delay="0.6s"
                             style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                            <span
                                class="d-block text-extra-dark-gray d-lg-inline-block md-margin-10px-bottom">Website:</span>
                            <a href="https://www.themezaa.com/" target="_blank">www.themezaa.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-0 position-relative">
        <div class="slider-blog-banner swiper-container black-move"
             data-slider-options='{ "loop": true, "centeredSlides": true, "slidesPerView": "1", "speed": 1000, "pagination": { "el": ".swiper-pagination", "clickable": true }, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "breakpoints": { "992": { "slidesPerView": "auto" } }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide w-55"><img
                        src="{{url(asset('web/assets/images/single-project-page-05-img-01.jpg'))}}" class="w-100"
                        alt=""/></div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide w-55"><img
                        src="{{url(asset('web/assets/images/single-project-page-05-img-01.jpg'))}}" class="w-100"
                        alt=""/></div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide w-55"><img
                        src="{{url(asset('web/assets/images/single-project-page-05-img-01.jpg'))}}" class="w-100"
                        alt=""/></div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <!--<div class="swiper-pagination"></div>-->
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <div
                class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07 box-shadow-large bg-white">
                <i class="feather icon-feather-arrow-left text-extra-dark-gray"></i></div>
            <div
                class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07 box-shadow-large bg-white">
                <i class="feather icon-feather-arrow-right text-extra-dark-gray"></i></div>
            <!-- end slider navigation -->
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 md-margin-30px-bottom xs-margin-20px-bottom wow animate__fadeIn"
                     data-wow-delay="0.2s" data-enllax-ratio="-.1" data-enllax-type="foreground"
                     data-enllax-direction="vertical">
                    <h5 class="alt-font text-extra-dark-gray mb-0">Fashion is a form of <span class="font-weight-600">ugliness so intolerable</span>
                        that we have to alter it every six months.</h5>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 last-paragraph-no-margin wow animate__fadeIn"
                     data-wow-delay="0.4s" data-enllax-ratio="-.15" data-enllax-type="foreground"
                     data-enllax-direction="vertical">
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been
                        the industry's standard dummy text ever since when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="p-0 parallax h-750px md-h-550px sm-h-350px" data-parallax-background-ratio="0.1"
             style="background: url({{url(asset('web/assets/images/single-project-page-02-img6.jpg'))}})">
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 md-margin-30px-bottom xs-margin-20px-bottom wow animate__fadeIn"
                     data-wow-delay="0.2s" data-enllax-ratio="-.1" data-enllax-type="foreground"
                     data-enllax-direction="vertical">
                    <h5 class="alt-font text-extra-dark-gray mb-0">Fashion is a form of <span class="font-weight-600">ugliness so intolerable</span>
                        that we have to alter it every six months.</h5>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 last-paragraph-no-margin wow animate__fadeIn"
                     data-wow-delay="0.4s" data-enllax-ratio="-.15" data-enllax-type="foreground"
                     data-enllax-direction="vertical">
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been
                        the industry's standard dummy text ever since when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="p-0 parallax h-750px md-h-550px sm-h-350px" data-parallax-background-ratio="0.1"
             style="background: url({{url(asset('web/assets/images/single-project-page-02-img6.jpg'))}})">
    </section>





    <section class="fancy-box-background fancy-box-col bg-light-gray p-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-2 justify-content-center">
                <div class="col col-sm-6 fancy-box-item px-0">
                    <a href="#"
                       class="d-flex h-100 align-items-center justify-content-center justify-content-lg-between justify-content-sm-start padding-7-rem-lr padding-4-rem-tb xl-padding-3-rem-all xs-padding-2-rem-tb xs-no-padding-lr">
                        <div
                            class=" alt-font text-extra-dark-gray font-weight-500 btn-slide-icon-left text-uppercase me-lg-auto">
                            <i class="line-icon-Arrow-OutLeft icon-medium align-middle margin-20px-right"></i><span
                                class="d-none d-lg-inline-block text-small">Anterior</span></div>
                        <span class=" text-extra-large alt-font text-extra-dark-gray d-block font-weight-500">Model photography</span>
                    </a>
                </div>
                <div class="col col-sm-6 fancy-box-item px-0">
                    <a href="#"
                       class="d-flex h-100 align-items-center justify-content-center justify-content-sm-end justify-content-lg-between padding-7-rem-lr padding-4-rem-tb xl-padding-3-rem-all xs-padding-2-rem-tb xs-no-padding-lr">
                        <span class="text-extra-large alt-font text-extra-dark-gray d-block font-weight-500 me-lg-auto">Daimler financial</span>
                        <div class="alt-font text-extra-dark-gray font-weight-500 btn-slide-icon text-uppercase"><span
                                class="d-none d-lg-inline-block text-small">Próximo </span><i
                                class="line-icon-Arrow-OutRight icon-medium align-middle margin-20px-left"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </section>


{{--    <section class="fix-background padding-100px-tb md-padding-75px-tb sm-padding-50px-tb"--}}
{{--             style="background-image:url('{{ url(asset('web/assets/images/hipo/sistemas/bg.jpg')) }}');">--}}
{{--        <div class="opacity-medium"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center justify-content-center">--}}
{{--                <div--}}
{{--                    class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">--}}
{{--                    <h4 class="alt-font font-weight-300 text-white mb-0">Está pronto para<br><span--}}
{{--                            class="font-weight-600">alavancar o seu negócio?</span></h4>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-xl-5 col-md-4 position-relative text-center text-md-end">--}}
{{--                    <a href="https://api.whatsapp.com/send?phone=551330274731&text=Ol%C3%A1!%20Estou%20chamando%20sobre%20Tr%C3%A1fego%20Pago"--}}
{{--                       target="_blank" class="btn btn-large btn-yellow"><i class="fab fa-whatsapp"></i> WhatsApp</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    @include('web.components.form')


@endsection
