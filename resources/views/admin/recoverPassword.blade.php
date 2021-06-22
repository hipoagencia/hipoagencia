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

        @if(session()->exists('message'))
            @component('admin.components.message',['type' => session()->get('type')])
                {{ session()->get('message') }}
            @endcomponent
        @endif

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" type="email" placeholder="" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3 mt-3">
            {!! NoCaptcha::renderJs() !!} {!! NoCaptcha::display() !!}
        </div>

        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Resgatar a Senha</button>
        </div>


        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-new-box me-1"></i> Criar conta</a>

        </div>
    </form>

@endsection
