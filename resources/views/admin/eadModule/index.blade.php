@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">EAD Módulos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Módulos Cadastrados</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="row mb-2">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <div class="text-sm-end">
                    <a href="{{ route('admin.ead-module.create') }}"
                       class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                            class="mdi mdi-plus me-1"></i> Novo</a>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if(session()->exists('message'))
                        @component('admin.components.message',['type' => session()->get('type')])
                            {{ session()->get('message') }}
                        @endcomponent
                    @endif


                    <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                        <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th>Título</th>
                            <th>Categorias</th>
                            <th>Cover</th>
                            <th>Criado em</th>
                            <th width="1%">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>


@endsection



@section('js')

    <script type="text/javascript">
        $(function () {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.ead-module.get') }}",
                order: [ [0, 'desc'] ],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'categories', name: 'categories'},
                    {data: 'cover', name: 'cover'},
                    {data: 'created_at', name: 'created_at'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>

@endsection
