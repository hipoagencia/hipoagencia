@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Permissões</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Permissões
                                Cadastradas</a>
                        </li>
                        <li class="breadcrumb-item active">Novo</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

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

                <div class="card-body">
                    <form action="{{ route('admin.roles.store') }}" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">

                        @csrf

                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab"
                                   aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-user"></i></span>
                                    <span class="d-none d-sm-block">Informações</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <h3 class="mb-3">Informações</h3>


                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" class="form-control"
                                                   value="{{ old('name') }}">
                                        </div>
                                    </div>



                                    <div class="col-md-12 mt-3">
                                        <div class="row">



                                            @foreach($permissions as $permission)

                                                <div class="form-check mb-3 col-md-3">
                                                    <input class="form-check-input checks" type="checkbox" name="roles[]" value="{{ $permission->name }}" id="{{ $permission->name }}" ) }}>
                                                    <label class="form-check-label" for="{{ $permission->name }}">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mt-3 mb-4">
                                            <input class="form-check-input checkall" type="checkbox">
                                            <label class="form-check-label" >
                                                Selecionar Todos
                                            </label>
                                        </div>
                                    </div>

                                </div>

                            </div>




                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Alterar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')



    <script type="text/javascript">

        $('.checkall').on('change', function() {
            $('.checks').prop('checked', $(this).prop("checked"));
        });
        //deselect "checked all", if one of the listed checkbox category is unchecked amd select "checked all" if all of the listed checkbox category is checked
        $('.checkall').change(function(){ //".checkbox" change
            if($('.checks:checked').length == $('.checks').length){
                $('.select_all').prop('checked',true);
            }else{
                $('.select_all').prop('checked',false);
            }
        });
    </script>

@endsection
