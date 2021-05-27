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
                    <form action="{{ route('admin.gallery.update', ['gallery' => $gallery->id]) }}" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $gallery->id }}">

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
                                    <span class="d-none d-sm-block">Fotos</span>
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
                                                   value="{{ old('name') ?? $gallery->name }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="1" {{ ( old('status') == '1' ? 'selected' : ($gallery->status == '1' ? 'selected' : '' )) }}>
                                                    Ativo
                                                </option>
                                                <option
                                                    value="0" {{ ( old('status') == '0' ? 'selected' : ($gallery->status == '0' ? 'selected' : '' )) }}>
                                                    Inativo
                                                </option>
                                            </select>
                                        </div>
                                    </div>




                                    <h5 class="mb-3 mt-4">SEO</h5>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input name="title" class="form-control" id="form-row-email-input"
                                                       value="{{ old('title') ?? $gallery->title }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="headline" class="form-label">Headline</label>
                                                <input name="headline" class="form-control"
                                                       value="{{ old('headline') ?? $gallery->headline }}">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input name="slug" class="form-control"
                                                       value="{{ old('slug') ?? $gallery->slug }}">
                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <h5 class="mb-3 mt-4">Descrição</h5>

                                <div class="row">

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Descrição</label>
                                        <textarea id="elm1" class="my-editor"
                                                  name="description">{{ old('description') ?? $gallery->description }}</textarea>
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
                                    <div class="property_image row mt-3">
                                        <table id="table" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th width="30px"></th>
                                                <th><i class="fa fa-sort"></i> Arraste para ordenar</th>
                                                <th>Criado em</th>
                                                <th>Ações</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tablecontents">
                                            @foreach($gallery->images()->get() as $image)
                                                <tr class="row1" data-id="{{ $image->id }}" data-action="{{$gallery->id}}">
                                                    <td class="pl-3"><i class="fa fa-sort"></i></td>
                                                    <td>
                                                        <a class="image-popup-vertical-fit" href="{{ url($image->path) }}" title="{{ $image->created_at }}">
                                                            <img src="{{ url($image->path) }}" width="130" class="img-fluid">
                                                        </a>
                                                    </td>
                                                    <td>{{ $image->created_at }}</td>
                                                    <td><a href="javascript:void(0)"
                                                           class="btn btn-primary btn-sm waves-effect waves-light {{ ($image->cover == true ? 'btn-success' : '') }} image-set-cover"
                                                           data-action="{{ route('admin.gallery.imageSetCover', ['image'=> $image->id]) }}">
                                                            <i class="mdi mdi-camera-enhance"></i> Capa</a>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-danger btn-sm waves-effect waves-light image-remove"
                                                           data-action="{{ route('admin.gallery.imageRemove', ['image'=> $image->id]) }}">
                                                            <i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
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
                    url: "{{ route('admin.gallery.imageOrder') }}",
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
