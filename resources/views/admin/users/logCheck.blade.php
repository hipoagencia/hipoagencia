@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Usuários</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Usuários Cadastrados</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    @if($log && $log['subject_type'] != null)

                        <h1>Editado</h1>
                        <pre>{{ var_export($log['properties']['attributes'], true) }}</pre>
                        <hr>
                        <h1>Antigo</h1>
                        <pre>{{ var_export($log['properties']['old'], true) }}</pre>

                    @else
                        <h2>Nenhum dado alterado</h2>
                    @endif


                </div>
            </div>
        </div>
    </div>

@endsection

