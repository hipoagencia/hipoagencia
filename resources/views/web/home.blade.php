<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ url(asset('web/assets/css/bootstrap.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/animate.min.css')) }}">

    <link rel="stylesheet" href="{{ url(asset('web/assets/css/meanmenu.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/boxicons.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/flaticon.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/odometer.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/nice-select.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/owl.carousel.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/owl.theme.default.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/magnific-popup.min.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/style.css')) }}">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/responsive.css')) }}">

    <title>Boston Medical</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>

{{--<div class="preloader">--}}
{{--    <div class="loader">--}}
{{--        <div class="shadow"></div>--}}
{{--        <div class="box"></div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('web.home') }}">
                        <img src="{{ url(asset('web/assets/images/logo.png')) }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('web.home') }}">
                    <img src="{{ url(asset('web/assets/images/logo.png')) }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Especialidades</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contato</a>
                        </li>

                        <!--<li class="nav-item">
                            <a href="#" class="nav-link">
                                Events
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="events.html" class="nav-link">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="events-booking.html" class="nav-link">Events Booking</a>
                                </li>
                                <li class="nav-item">
                                    <a href="events-details.html" class="nav-link">Events Details</a>
                                </li>
                            </ul>
                        </li>-->

                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="#"> <i class='bx bx-search-alt' style="font-size:50px;"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</div>
<div class="main-banner-area">
    <div>
        <div class="container">
            <div class="row align-items-center">

                <div class="col col-12 col-md-6 order-lg-last">

                    <div class="main-banner-content">
                        <h1>Quem<br />se informa,<br /><span class="text-white">se cuida</span></h1>
                        <p>Tudo o que você precisa saber sobre as principais condições clínicas, direto de médicos e especialistas. Isso sim é saúde.</p>
                    </div>

                </div>
                <div class="col col-12 col-md-6 order-lg-first">

                    <img src="{{ url(asset('web/assets/images/boston/woman.png')) }}" />

                </div>

            </div>
        </div>
    </div>
</div>
<div class="specialities pt-70 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Conheça nossas especialidades</h2>
            <span>
                    Fique por dentro dos principais sintomas, diagnósticos, tratamentos e formas de prevenção
                    para condições clínicas que atingem milhares de brasileiros.
                </span>
        </div>
        <div class="row justify-content-center specialities-links">
            <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center mb-5">
                <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/1.png')) }}"/></a>
                <h5>Sistema Nervoso</h5>
            </div>
            <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/3.png')) }}" /></a>
                <h5>Coração</h5>

            </div>
            <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/2.png')) }}" /></a>
                <h5>Sistema Urinário</h5>
            </div>

            <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/4.png')) }}" /></a>
                <h5>Cânceres e Tumores</h5>

            </div>
            <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                <a href="#"><img src="{{ url(asset('web/assets/images/boston/ico/5.png')) }}" /></a>
                <h5>Saúde Sexual</h5>

            </div>
        </div>
    </div>
</div>


<div class="pt-70">
    <div class="container">
        <div class="section-title">
            <h2>Ou navegue pelo corpo</h2>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-6 text-center">

                <span onclick="openBrain()" class="pointer"><img src="{{ url(asset('web/assets/images/boston/body/1.jpg')) }}"/></span>
                <img src="{{ url(asset('web/assets/images/boston/body/2.jpg')) }}" />
                <span onclick="openHeart()" class="pointer"><img src="{{ url(asset('web/assets/images/boston/body/3.jpg')) }}" /></span>
                <img src="{{ url(asset('web/assets/images/boston/body/4.jpg')) }}" />
                <span onclick="openUrine()" class="pointer"><img src="{{ url(asset('web/assets/images/boston/body/5.jpg')) }}" /></span>
                <span onclick="openCancer()" class="pointer"><img src="{{ url(asset('web/assets/images/boston/body/6.jpg')) }}" /></span>
                <span onclick="openSexual()" class="pointer"><img src="{{ url(asset('web/assets/images/boston/body/7.jpg')) }}" /></span>
                <img src="{{ url(asset('web/assets/images/boston/body/8.jpg')) }}" />



                <script>
                    function openBrain() {
                        document.getElementById("brain").style.width = "100%";
                    }

                    function openHeart() {
                        document.getElementById("heart").style.width = "100%";
                    }

                    function openUrine() {
                        document.getElementById("urine").style.width = "100%";
                    }

                    function openCancer() {
                        document.getElementById("cancer").style.width = "100%";
                    }

                    function openSexual() {
                        document.getElementById("sexual").style.width = "100%";
                    }

                    function closeNav() {
                        document.getElementsByClassName("overlay")[0].style.width = "0%";
                        document.getElementsByClassName("overlay")[1].style.width = "0%";
                        document.getElementsByClassName("overlay")[2].style.width = "0%";
                        document.getElementsByClassName("overlay")[3].style.width = "0%";
                        document.getElementsByClassName("overlay")[4].style.width = "0%";
                    }
                </script>




                <!--<img src="assets/images/boston/body.jpg" usemap="#image-map">

<map name="image-map">
    <area target="_self" alt="Cérebro" title="Cérebro" href="javascript:void(0);" class="cerebro" coords="208,59,32" shape="circle">
    <area target="_self" alt="Coração" title="Coração" href="javascript:void(0);" class="coracao" coords="243,260,34" shape="circle">
    <area target="_self" alt="Sistema Urinário" title="Sistema Urinário" href="urinário" coords="NaN" shape="circle">
    <area target="_self" alt="Cânceres e Tumores" title="Cânceres e Tumores" href="canceres" coords="NaN" shape="circle">
    <area target="_self" alt="Saúde Sexual" title="Saúde Sexual" href="sexual" coords="207,562,36" shape="circle">
</map>-->



            </div>

        </div>
    </div>
</div>



<div id="brain" class="overlay overlay-brain">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Parkinson</a>
        <a href="javascript:void(0);">Dor Crônica</a>
        <a href="javascript:void(0);">AVC</a>
    </div>
</div>

<div id="heart" class="overlay overlay-heart">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Arritmia</a>
        <a href="javascript:void(0);">Fibrilação Arterial</a>
        <a href="javascript:void(0);">AVC</a>
        <a href="javascript:void(0);">Morte Súbita</a>
    </div>
</div>

<div id="urine" class="overlay overlay-urine">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Incontinencia Urinária Masculina</a>
    </div>
</div>

<div id="cancer" class="overlay overlay-cancer">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Hiperplasia Prostática Benigna</a>
    </div>
</div>

<div id="sexual" class="overlay overlay-sexual">
    <div class="overlay-content">
        <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0);">Disfunção Erétil</a>
    </div>
</div>


<div class="how-to-health pt-70 pb-70">
    <div class="container">
        <div class="section-title-blue">
            <h2>Como usar o Saber da Saúde?</h2>
        </div>
        <div class="row justify-content-center">

            <p class="w-75 text-white text-center f-18">O Saber da Saúde tem o objetivo de combater a desinformação e ajudar na prevenção das condições clínicas que você encontra no portal. Todos os conteúdos são desenvolvidos por médicos e especialistas, mas é importante deixar uma coisa bem clara: esse site <b>NÃO SUBSTITUI SEU MÉDICO</b>.</p>

            <p class="f-22 text-center color-blue w-50">Se você ou alguém que você conhece apresenta quaisquer sintomas, procure imediatamente um especialista.</p>

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
                <a href="#" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i class="bx bxs-chevron-right"></i><span></span></a>
            </div>
        </div>
        <div class="row justify-content-center">


            <div class="col-lg-4">
                <article class="blog-post">
                    <div class="blog-post-title" style="background-color: #ac1d2e;">
                        <h5 class="font-light"><img src="{{ url(asset('web/assets/images/boston/ico/ico-coracao.png')) }}"/> Coração</h5>
                    </div>

                    <img src="{{ url(asset('web/assets/images/boston/img-blog.jpg')) }}" />
                    <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                    <div class="row read-more">
                        <a href="#" class="text-right">Continue lendo</a>
                    </div>

                </article>
            </div>

            <div class="col-lg-4">
                <article class="blog-post">
                    <div class="blog-post-title" style="background-color: #ac1d2e;">
                        <h5 class="font-light"><img src="{{ url(asset('web/assets/images/boston/ico/ico-coracao.png')) }}" /> Coração</h5>
                    </div>

                    <img src="{{ url(asset('web/assets/images/boston/img-blog.jpg')) }}" />
                    <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                    <div class="row read-more">
                        <a href="#" class="text-right">Continue lendo</a>
                    </div>

                </article>
            </div>

            <div class="col-lg-4">
                <article class="blog-post">
                    <div class="blog-post-title" style="background-color: #ac1d2e;">
                        <h5 class="font-light"><img src="{{ url(asset('web/assets/images/boston/ico/ico-coracao.png')) }}" /> Coração</h5>
                    </div>

                    <img src="{{ url(asset('web/assets/images/boston/img-blog.jpg')) }}"/>
                    <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>

                    <div class="row read-more">
                        <a href="#" class="text-right">Continue lendo</a>
                    </div>

                </article>
            </div>




        </div>
    </div>
</div>




<!--<div class="specialists pt-70 pb-70 bg-color-blue">
    <div class="container">
        <div class="section-title d-block ">
            <h2>Conheça nossos especialistas</h2>
        </div>
        <div class="row justify-content-center">

            <br /><br /><br /><br /><br /><br /><br /><br /><br />

        </div>
    </div>
</div>-->




<div class="pt-70 pb-70 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>Assine nossa newsletter</h2>
        </div>
        <div class="row justify-content-center">

            <br /><br /><br /><br /><br /><br /><br /><br /><br />

        </div>
    </div>
</div>

<div class="pt-40 pb-40 sub-footer">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-3 pt-4">
                <img src="{{ url(asset('web/assets/images/logo.png')) }}" alt="logo">
            </div>

            <div class="col-lg-6 pt-4">
                <h4>Siga o Saber da Saúde nas redes sociais</h4>
            </div>

            <div class="col-lg-3">
                <img src="{{ url(asset('web/assets/images/boston/boston.png')) }}" alt="logo">
            </div>

        </div>
    </div>
</div>


<footer class="footer-area">
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <div class="row align-items-center">
                    <div class="container">
                        <div class="col-lg-8 offset-lg-2 text-center footer-map">

                            <a href="#">Home</a>
                            <a href="#">Especialidades</a>
                            <a href="#">Sobre</a>
                            <a href="#">Blog</a>
                            <a href="#">Contato</a>
                            <a href="#">Coração</a>
                            <a href="#">Sistema Nervoso</a><br />
                            <a href="#">Sistema Urinário</a>
                            <a href="#">Saúde Sexual</a>
                            <a href="#">Câncer e Tumores</a>
                            <a href="#">Política de Privacidade</a>
                            <a href="#">Termos de Uso</a>

                            <p class="mt-4">
                                © 2021 Boston Scientific Corporation ou suas afliliadas. Todo os direitos reservados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="go-top">
    <i class='bx bx-chevron-up'></i>
</div>

@include('cookieConsent::index')


<link rel="stylesheet" href="{{ url(asset('web/assets/js/jquery.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/bootstrap.bundle.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/jquery.meanmenu.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/owl.carousel.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/jquery.appear.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/odometer.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/nice-select.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/jquery.magnific-popup.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/jquery.ajaxchimp.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/form-validator.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/contact-form-script.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/wow.min.js')) }}">
<link rel="stylesheet" href="{{ url(asset('web/assets/js/main.js')) }}">




</body>
</html>

