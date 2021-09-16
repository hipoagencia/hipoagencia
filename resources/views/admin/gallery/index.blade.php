@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Galerias</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Galerias Cadastrados</li>
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
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Novo</a>
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

                    @if($galleries)

                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th width="3%">#</th>
                                <th>Nome</th>
                                <th width="8%">Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>
                                        <a href="{{ route('admin.gallery.edit', ['gallery' => $gallery->id]) }}">{{ $gallery->name }}</a>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">
                                                <li><a href="{{ route('admin.gallery.edit', ['gallery' => $gallery->id]) }}" class="dropdown-item"><i class="mdi mdi-pen font-size-16 text-success me-1"></i> Editar</a></li>
                                                <form action="{{ route('admin.gallery.destroy', ['gallery' => $gallery->id]) }}" method="post" onsubmit="if(!confirm('Deseja remover esse registro? Essa ação não pode ser desfeita.')){return false;}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <li><button type="submit" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Deletar</button></li>
                                                </form>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                            {!! $galleries->links() !!}
                    @else
                        <h3>Nenhum registro encontrado</h3>
                    @endif


                </div>
            </div>
        </div>
    </div>

@endsection
