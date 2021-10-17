<!doctype html>
<html lang="pt-br">
<head>

    <title>{{ env('APP_NAME') }}</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/animate.min.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/meanmenu.css')) }}"/>
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/boxicons.min.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/flaticon.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/odometer.min.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/nice-select.min.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/owl.carousel.min.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/owl.theme.default.min.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/magnific-popup.min.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/style.css')) }}" />
    <link rel="stylesheet" href="{{ url(asset('web/assets/css/responsive.css')) }}" />

    <link rel="icon" type="image/png" href="{{ url(asset(env('INFO_FAVICON'))) }}" />

    @hasSection('css')
        @yield('css')
    @endif
</head>
<body>

@include('web.master.header')


@yield('content')


@include('web.master.footer')

@include('cookieConsent::index')

<script src="{{ url(asset('web/assets/js/jquery.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/bootstrap.bundle.min.js')) }}"></script>

<script src="{{ url(asset('web/assets/js/jquery.meanmenu.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/owl.carousel.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/jquery.appear.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/odometer.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/nice-select.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/jquery.magnific-popup.min.js')) }}"></script>
{{--<link rel="stylesheet" href="{{ url(asset('web/assets/js/jquery.ajaxchimp.min.js')) }}"></script>--}}
<script src="{{ url(asset('web/assets/js/form-validator.min.js')) }}"></script>
{{--<link rel="stylesheet" href="{{ url(asset('web/assets/js/contact-form-script.js')) }}"></script>--}}
<script src="{{ url(asset('web/assets/js/wow.min.js')) }}"></script>
<script src="{{ url(asset('web/assets/js/main.js')) }}"></script>

@hasSection('js')
    @yield('js')
@endif

</body>
</html>

