@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Resumo de Atividade</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Página Inicial</li>
                    </ol>
                </div>




{{--                @can('user_create')--}}
{{--                    CRIAR USUÁRIO--}}
{{--                @endcan--}}

{{--                @can('user_delete')--}}
{{--                    DELETAR USUÁRIO--}}
{{--                @endcan

                    NO
                    AuthServiceProvider
                    EU DEFINO O USER_CREATE

                    PARA PROTEGER O CONTROLE, UTILIZAR:
                    $this->authorize('user_view');
--}}

            </div>
        </div>
    </div>

    <div class="row">

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
    </div>

@endsection
