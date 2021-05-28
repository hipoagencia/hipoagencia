@extends('admin.master.masterLogin')

@section('content')

    <form class="form-horizontal" action="{{ route('recover-Password-SendMail') }}" method="POST" autocomplete="false">
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


        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Resgatar a Senha</button>
        </div>


        <div class="mt-4 text-center">
            <a href="#" class="text-muted">Cria conta</a> ou <a href="#" class="text-muted"> Entrar</a>
        </div>
    </form>

@endsection
