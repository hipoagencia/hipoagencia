@extends('admin.master.master')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Conteúdos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item active">Conteúdos Cadastrados</li>
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
                    <form action="{{ route('admin.content.store') }}" method="POST"
                          autocomplete="false">

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

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="1" {{ ( old('status') == '1' ? 'selected' : '') }}>
                                                    Ativo
                                                </option>
                                                <option
                                                    value="0" {{ ( old('status') == '0' ? 'selected' : '') }}>
                                                    Inativo
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-3 mt-3">
                                        <textarea id="elm1" class="my-editor" name="description" >{{ old('description')}}</textarea>
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
                                                   value="{{ old('title') }}">
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

