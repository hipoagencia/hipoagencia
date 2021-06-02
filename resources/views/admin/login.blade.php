@extends('admin.master.masterLogin')

@section('content')

{{--    {!! RecaptchaV3::initJs() !!}--}}

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
                <input type="password" class="form-control" name="password" placeholder="" type="password"
                       aria-label="Password" aria-describedby="password-addon" required>
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i>
                </button>
            </div>
        </div>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember">
            <label class="form-check-label" for="remember-check">
                Lembre-me
            </label>
        </div>


        <div class="mb-3 mt-3">
            {!! NoCaptcha::renderJs() !!} {!! NoCaptcha::display() !!}
        </div>

        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Entrar</button>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('recoverPassword') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Esqueceu a
                senha?</a>
        </div>


    </form>




@endsection

@section('js')
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
@endsection
