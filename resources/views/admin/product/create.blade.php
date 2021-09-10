@extends('admin.master.master')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Produtos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Início</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Produtos
                                Cadastrados</a>
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


                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST"
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

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Preço R$</label>
                                            <input name="price" class="form-control"
                                                   value="{{ old('price')  }}">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="1" {{ ( old('status') == '1' ? 'selected' : '' ) }}>
                                                    Ativo
                                                </option>
                                                <option
                                                    value="0" {{ ( old('status') == '0' ? 'selected' : '' ) }}>
                                                    Inativo
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
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

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Tipo</label>
                                            <select class="form-select" name="recurrent">
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="Assinatura" {{ ( old('recurrent') == 'Assinatura' ? 'selected' : '') }}>
                                                    Assinatura
                                                </option>
                                                <option
                                                    value="Produto" {{ ( old('recurrent') == 'Produto' ? 'selected' : '') }}>
                                                    Produto
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Modelo</label>
                                            <select class="form-select"
                                                    name="typePayment">
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="----" {{ ( old('typePayment') == '----' ? 'selected' : '' ) }}>
                                                    ----
                                                </option>
                                                <option
                                                    value="Mensal" {{ ( old('typePayment') == 'Mensal' ? 'selected' : '' ) }}>
                                                    Mensal (recorrente)
                                                </option>
                                                <option
                                                    value="Pacote Meses" {{ ( old('typePayment') == 'Pacote Meses' ? 'selected' : '' ) }}>
                                                    Pacote Meses (avulso)
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="days" class="form-label">Tempo de Plano (em dias)</label>
                                            <input name="days" class="form-control"
                                                   value="{{ old('days') ?? '0'  }}">
                                        </div>
                                    </div>




                                    <h5 class="mb-3 mt-4">SEO</h5>
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

                                <h5 class="mb-3 mt-4">Descrição</h5>

                                <div class="row">

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Descrição</label>
                                        <textarea id="elm1" class="my-editor"
                                                  name="description">{{ old('description') }}</textarea>
                                    </div>


                                </div>


                            </div>

                            <div class="tab-pane" id="profile1" role="tabpanel">
                                <h3 class="mb-3">Foto</h3>
                                <div class="row">

                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="cover" class="form-label">Imagens</label>
                                            <input name="files[]" class="form-control" type="file" id="formFile"
                                                   multiple>
                                        </div>
                                    </div>

                                    <div class="content_image row">

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary w-md">Inserir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <script>

        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('input[name="files[]"]').change(function (files) {

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


            $('.image-set-cover').click(function (event) {
                event.preventDefault();

                var button = $(this);
                $.post(button.data('action'), {}, function (response) {
                    if (response.success === true) {
                        $('.property_image').find('a.btn-success').removeClass('btn-success');
                        button.addClass('btn-success');
                    }
                }, 'json');
            });

            $('.image-remove').click(function (event) {
                event.preventDefault();

                var button = $(this);

                $.ajax({
                    url: button.data('action'),
                    type: 'delete',
                    dataType: 'json',
                    success: function (response) {

                        if (response.success === true) {
                            button.closest('#table tr').fadeOut(function () {
                                $(this).remove();
                            });
                        }
                    }
                })
            });

            $("#tablecontents").sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function () {
                    sendOrderToServer();
                }
            });

            function sendOrderToServer() {
                var order = [];
                var token = $('meta[name="csrf-token"]').attr('content');
                $('tr.row1').each(function (index, element) {
                    order.push({
                        id: $(this).attr('data-id'),
                        position: index + 1
                    });
                });

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "{{ route('admin.products.imageOrder') }}",
                    data: {
                        order: order,
                        ref:  $('tr.row1').data('action'),
                        _token: token
                    },
                    success: function (response) {
                        if (response.status == "success") {
                            console.log(response);
                        } else {
                            console.log(response);
                        }
                    }
                });
            }
        });
    </script>



@endsection
