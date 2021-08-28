@extends('admin.master.master')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Posts</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Posts Cadastrados</li>
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


                <div class="card-body">
                    <form action="{{ route('admin.posts.store') }}" method="POST"
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
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab"
                                   aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="far fa-image"></i></span>
                                    <span class="d-none d-sm-block">Foto</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">SEO</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                <h3 class="mb-3">Informações</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" class="form-control"
                                                   value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formrow-inputState" class="form-label">Autor</label>
                                            <select id="formrow-inputState" class="form-select" name="user_id">
                                                <option>Selecione o Autor..</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}" {{ (old('user') == $user->id ? 'selected' : '' ) }}>{{ $user->name }} {{ $user->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Categorias</label>

                                        <select class="select2 form-control select2-multiple"
                                                multiple="multiple" name="categories[]"
                                                data-placeholder="Selecione a Categoria..">

                                            @foreach($categories->get() as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ (in_array($category->id, old("categories") ?: []) ? "selected" : "") }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="mb-3 mt-3">
                                        <textarea id="elm1" name="description" >{{ old('description') }}</textarea>
                                    </div>


                                </div>


                            </div>

                            <div class="tab-pane" id="profile1" role="tabpanel">
                                <h3 class="mb-3">Foto</h3>
                                <div class="row">

                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="cover" class="form-label">Imagem Principal</label>
                                            <input name="cover" class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>

                                    <div class="content_image row">
                                        <div class="col-4">

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="tab-pane" id="messages1" role="tabpanel">
                                <h3 class="mb-3">SEO</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input name="title" class="form-control" id="form-row-email-input"
                                                   value="{{ old('title')}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="headline" class="form-label">Headline</label>
                                            <input name="headline" class="form-control"
                                                   value="{{ old('headline') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input name="slug" class="form-control"
                                                   value="{{ old('slug') }}">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Inserir</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

    </div>

@endsection


@section('js')
    <script>


        $(function () {

            $('input[name="cover"]').change(function (files) {

                $('.content_image').text('');

                $.each(files.target.files, function (key, value) {
                    var reader = new FileReader();
                    reader.onload = function (value) {
                        $('.content_image').append(
                            '<div class="col-md-4">' +
                            '<img class="img-fluid" ' +
                            'src="' + value.target.result + '">' +
                            '</img>' +
                            '</div>');
                    };
                    reader.readAsDataURL(value);
                });
            });


        });
    </script>
@endsection
