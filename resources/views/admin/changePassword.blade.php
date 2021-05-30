@extends('admin.master.masterLogin')

@section('content')

    <form class="form-horizontal" action="" method="POST" autocomplete="false">
        @csrf

        @if($errors->all())
            @foreach($errors->all() as $error)
                @component('admin.components.message',['type' => 'danger'])
                    {{ $error }}
                @endcomponent
            @endforeach
        @endif

        <div class="text-center mt-3 mb-4"><h3>Digite a sua nova senha</h3></div>

        <div class="mb-3">
            <label class="form-label">Nova senha</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control" name="password" placeholder="" type="password"
                       aria-label="Password" aria-describedby="password-addon" required>
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i>
                </button>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Digite novamente a nova senha</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password_confirm" class="form-control" name="password_confirm" placeholder="" type="password"
                       aria-label="Password" aria-describedby="password-addon" required>
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i>
                </button>
            </div>
        </div>


        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Confirmar</button>
        </div>

    </form>

@endsection
