<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }} - Entre com a sua conta!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="HipoAgência" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url(asset(env('INFO_FAVICON'))) }}">

    <!-- Bootstrap Css -->
    <link href="{{ url(asset('backend/assets/css/bootstrap.min.css')) }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url(asset('backend/assets/css/icons.min.css')) }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url(asset('backend/assets/css/app.min.css')) }}" id="app-style" rel="stylesheet" type="text/css" />

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="card-body pt-4">
                        <div class="p-2">

                            <div class="text-center mb-4"><img src="{{ url(asset(env('INFO_LOGO'))) }}" alt="{{ env('APP_NAME') }}" class="src"></div>

                            @yield('content')

                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>© <script>document.write(new Date().getFullYear())</script> {{ env('APP_NAME') }}.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end account-pages -->

<!-- JAVASCRIPT -->
<script src="{{ url(asset('backend/assets/libs/jquery/jquery.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/metismenu/metisMenu.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/simplebar/simplebar.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/node-waves/waves.min.js')) }}"></script>

<script src="{{ url(asset('backend/assets/libs/inputmask/min/jquery.inputmask.bundle.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/js/pages/form-mask.init.js')) }}"></script>

<script src="{{ url(asset('backend/assets/js/app.js')) }}"></script>

</body>
</html>

