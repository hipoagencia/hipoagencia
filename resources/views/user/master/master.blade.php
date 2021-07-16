<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta name="robots" content="noindex" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ url(asset(env('info_favicon'))) }}">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>


@livewireStyles

    @hasSection('css')
        @yield('css')
    @endif

</head>
<body>

<div class="row m-5">
    <div class="container">

        Você é um usuário comum e está logado<br>
        <a href="{{ route('user.dashboard') }}">início</a>
        |
        <a href="{{ route('user.profile') }}">perfil</a>
        |
        <a href="{{ route('logout') }}">logout</a>

    </div>
</div>

@yield('content')



<script src="{{ url(asset('backend/assets/libs/jquery/jquery.min.js')) }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


@livewireScripts

@hasSection('js')
    @yield('js')
@endif

{{--Não esquecer de colocar os códigos do Google Analytics, tag manager e bla bla bla--}}

</body>
</html>

