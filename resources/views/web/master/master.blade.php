<!doctype html>
<html lang="pt-br">
<head>


    <title>Hipo Agência - Agência de Publicidade e Marketing Digital</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Hipo Agência">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="description" content="">

    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}



    @hasSection('css')
        @yield('css')
    @endif
</head>
<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">



@include('web.master.header')


@yield('content')


@include('web.master.footer')

@include('cookieConsent::index')


<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/theme-vendors.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

@hasSection('js')
    @yield('js')
@endif

<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>

</body>
</html>
