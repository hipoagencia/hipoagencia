@extends('admin.master.masterLogin')

@section('content')

{{--    {!! RecaptchaV3::initJs() !!}--}}

    <form class="form-horizontal" action="{{ route('register-do') }}" method="POST" autocomplete="false">
        @csrf

        @if($errors->all())
            @foreach($errors->all() as $error)
                @component('admin.components.message',['type' => 'danger'])
                    {{ $error }}
                @endcomponent
            @endforeach
        @endif

        <div class="row mt-3">
            <div class="col-xl-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" type="name" placeholder="" value="{{ old('name') }}" required>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" type="last_name" placeholder="" value="{{ old('last_name') }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Sexo</label>
                    <select name="genre" class="form-select">
                        <option selected>Escolha...</option>
                        <option
                            value="masculino" {{ (old('genre') == 'masculino' ? 'selected' : '') }}>
                            Masculino
                        </option>
                        <option
                            value="feminino" {{ (old('genre') == 'feminino' ? 'selected' : '') }}>
                            Feminino
                        </option>
                        <option
                            value="binario" {{ (old('genre') == 'binario' ? 'selected' : '') }}>
                            Binário
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Celular</label>
                    <input name="cell" id="input-mask" class="form-control input-mask"
                           data-inputmask="'mask': '(99) 999999999'" im-insert="true"
                           value="{{ old('cell') }} ">
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-xl-6">
                <div class="mb-3">

                    <label for="date_of_birth" class="form-label">Data de Nascimento</label>
                    <input name="date_of_birth" class="form-control" type="date"
                           value="{{ date('Y-m-d', strtotime(old('date_of_birth') )) ?? date('Y-m-d', strtotime('1991-01-01')) }}"
                           id="example-date-input">

                </div>
            </div>

            <div class="col-xl-6">
                <div class="mb-3">
                    <label for="document" class="form-label">CPF <span class="small">(somente números)</span></label>
                    <input type="text" class="form-control" id="document" name="document" placeholder="" value="{{ old('document') }}" required>
                </div>
            </div>
        </div>

        <div class="mb-3">

            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" type="email" placeholder="" value="{{ old('email') }}" required>
        </div>




        <div class="mb-3">
            <label class="form-label">Senha</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control" name="password" placeholder=""
                       aria-label="Password" aria-describedby="password-addon" required>
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i>
                </button>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Repita sua Senha</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control" name="password_confirm" placeholder=""
                       aria-label="password_confirm" aria-describedby="password_confirm" required>
            </div>
        </div>


        <div class="mb-4 mt-4">
            {!! NoCaptcha::renderJs() !!} {!! NoCaptcha::display() !!}
        </div>

        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Cadastrar</button>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Já possui um cadastro??</a>
        </div>


    </form>




@endsection

@section('js')
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
@endsection
