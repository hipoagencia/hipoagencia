<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ url(asset('backend/assets/css/bootstrap.min.css')) }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url(asset('backend/assets/css/icons.min.css')) }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url(asset('backend/assets/css/app.min.css')) }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="card-body pt-4">
                        <div class="p-2">

                            <div class="text-center"><img src="{{ url(asset(env('INFO_LOGO'))) }}" alt="{{ env('APP_NAME') }}" class="src"></div>

                            <form class="form-horizontal" action="{{ route('login.do') }}" method="POST" autocomplete="false">
                                @csrf

                                @if($errors->all())
                                    @foreach($errors->all() as $error)
                                        @component('admin.components.message',['type' => 'danger'])
                                            {{ $error }}
                                        @endcomponent
                                    @endforeach
                                @endif

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" type="email" placeholder="" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Senha</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" name="password" placeholder="" type="password" aria-label="Password" aria-describedby="password-addon" required>
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember">
                                    <label class="form-check-label" for="remember-check">
                                        Lembre-me
                                    </label>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Entrar</button>
                                </div>


                                <div class="mt-4 text-center">
                                    <a href="#" class="text-muted"><i class="mdi mdi-lock me-1"></i> Esqueceu a senha?</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>© <script>document.write(new Date().getFullYear())</script> {{ env('app_name') }}. Desenvolvido com <i class="mdi mdi-heart text-danger"></i> por
                            <a href="https://hipoagencia.com.br" target="_blank">Hipo Agência</a></p>
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

<script src="{{ url(asset('backend/assets/js/app.js')) }}"></script>

</body>
</html>
