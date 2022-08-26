<!doctype html>
<html lang="pt-br">
<head>


    <title>Hipo Agência - Agência de Publicidade e Marketing Digital</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Hipo Agência">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="description" content="">

    <link rel="shortcut icon" href="{{ url(asset('web/assets/images/favicon.png')) }}">
    <link rel="apple-touch-icon" href="{{ url(asset('web/assets/images/apple-touch-icon-57x57.png')) }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url(asset('web/assets/images/apple-touch-icon-72x72.png')) }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url(asset('web/assets/images/apple-touch-icon-114x114.png')) }}">

    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/font-icons.min.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/theme-vendors.min.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/style.css')) }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url(asset('web/assets/css/responsive.css')) }}"/>

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "4b291bc6-0732-4e93-82b9-83a5fb02af2d",
            });
        });
    </script>

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
<div id="WAButton"></div>

<script type="text/javascript" src="{{ url(asset('web/assets/js/jquery.min.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/theme-vendors.min.js')) }}"></script>
<script type="text/javascript" src="{{ url(asset('web/assets/js/main.js')) }}"></script>

<script type="text/javascript">
    $(function() {
        $('#WAButton').floatingWhatsApp({
            phone: '+551330274731',
            headerTitle: 'Fale conosco agora mesmo!',
            popupMessage: 'Como podemos te ajudar?',
            showPopup: true,
            buttonImage: '<img src="{{url(asset('web/assets/images/hipo/whatsapp.svg'))}}" />', //Button Image
            position: "right"
        });
    });
</script>

@hasSection('js')
    @yield('js')
@endif

<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer />

</body>
</html>
