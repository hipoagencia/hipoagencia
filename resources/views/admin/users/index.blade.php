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
        <div class="row mb-2">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <div class="text-sm-end">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Novo</a>
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

{{--                    @if($users)--}}
{{--                        <table class="table table-bordered dt-responsive nowrap w-100">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th width="3%">#</th>--}}
{{--                                <th>Nome</th>--}}
{{--                                <th>E-mail</th>--}}
{{--                                <th>Cadadastrado em</th>--}}
{{--                                <th>Data de Nascimento</th>--}}
{{--                                <th>CPF</th>--}}
{{--                                <th>Logs</th>--}}
{{--                                <th width="8%">Ações</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}

{{--                            <tbody>--}}
{{--                            @foreach($users as $user)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $user->id }}</td>--}}
{{--                                    <td><a href="{{ route('admin.users.edit', ['user' => $user->id]) }}">{{ $user->name }}</a></td>--}}
{{--                                    <td>{{ $user->email }}</td>--}}
{{--                                    <td>{{ $user->created_at }}</td>--}}
{{--                                    <td>{{ $user->date_of_birth }}</td>--}}
{{--                                    <td>{{ $user->document }}</td>--}}
{{--                                    <td><a href="{{ route('admin.users.log', ['id' => $user->id]) }}">Registros</a></td>--}}
{{--                                    <td>--}}
{{--                                        <div class="dropdown">--}}
{{--                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>--}}
{{--                                            </a>--}}
{{--                                            <ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">--}}
{{--                                                <form action="{{ route('admin.users.loginAsUser', ['user' => $user->id]) }}" method="post" onsubmit="if(!confirm('Deseja efetuar o login com esse usuário?')){return false;}">--}}
{{--                                                    @csrf--}}
{{--                                                    <li><button class="dropdown-item"><i class="mdi mdi-lock-open font-size-16 text-primary me-1"></i> Logar</button></li>--}}
{{--                                                </form>--}}
{{--                                                <li><a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="dropdown-item"><i class="mdi mdi-pen font-size-16 text-success me-1"></i> Editar</a></li>--}}
{{--                                                <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="post" onsubmit="if(!confirm('Deseja remover esse registro? Essa ação não pode ser desfeita.')){return false;}">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <li><button type="submit" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Deletar</button></li>--}}
{{--                                                </form>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}

{{--                            </tbody>--}}
{{--                        </table>--}}

{{--                            {!! $users->links() !!}--}}
{{--                    @else--}}
{{--                        <h3>Nenhum registro encontrado</h3>--}}
{{--                    @endif--}}

                        <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                            <thead>
                            <tr>
                                <th width="1%">ID</th>
                                <th>Título</th>
                                <th>CPF</th>
                                <th>Criado em</th>
                                <th>Log</th>
                                <th width="5%">Login</th>
                                <th width="5%">Ação</th>
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
                ajax: "{{ route('admin.users.get') }}",
                order: [ [0, 'desc'] ],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'document', name: 'document'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'log', name: 'log'},
                    {data: 'login', name: 'login'},
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
