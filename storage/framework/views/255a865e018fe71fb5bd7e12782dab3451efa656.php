<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Produtos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Início</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.products.index')); ?>">Produtos
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

                <?php if($errors->all()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__env->startComponent('admin.components.message',['type' => 'danger']); ?>
                            <?php echo e($error); ?>

                        <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if(session()->exists('message')): ?>
                    <?php $__env->startComponent('admin.components.message',['type' => session()->get('type')]); ?>
                        <?php echo e(session()->get('message')); ?>

                    <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                <?php endif; ?>

                <div class="card-body">
                    <form action="<?php echo e(route('admin.products.update', ['product' => $product->id])); ?>" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

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
                                                   value="<?php echo e(old('name') ?? $product->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Preço R$</label>
                                            <input name="price" class="form-control"
                                                   value="<?php echo e(old('price') ?? $product->price); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="1" <?php echo e(( old('status') == '1' ? 'selected' : ($product->status == '1' ? 'selected' : '' ))); ?>>
                                                    Ativo
                                                </option>
                                                <option
                                                    value="0" <?php echo e(( old('status') == '0' ? 'selected' : ($product->status == '0' ? 'selected' : '' ))); ?>>
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

                                            <?php $__currentLoopData = $categories->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($category->id); ?>" <?php echo e(($product->categories->find($category->id) == true ? 'selected' : (in_array($category->id, old("categories") ?: []) ? "selected" : ""))); ?>><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Tipo</label>
                                            <select class="form-select" name="recurrent" disabled>
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="Assinatura" <?php echo e(( old('recurrent') == 'Assinatura' ? 'selected' : ($product->recurrent == 'Assinatura' ? 'selected' : '' ))); ?>>
                                                    Assinatura
                                                </option>
                                                <option
                                                    value="Produto" <?php echo e(( old('recurrent') == 'Produto' ? 'selected' : ($product->recurrent == 'Produto' ? 'selected' : '' ))); ?>>
                                                    Produto
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Modelo</label>
                                            <select class="form-select"
                                                    name="typePayment" <?php echo e(($product->recurrent == 'Produto' || $product->typePayment  == 'Mensal') ? 'disabled' : ''); ?> disabled>
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="----" <?php echo e(( old('typePayment') == '----' ? 'selected' : ($product->typePayment == '----' ? 'selected' : '' ))); ?>>
                                                    ----
                                                </option>
                                                <option
                                                    value="Mensal" <?php echo e(( old('typePayment') == 'Mensal' ? 'selected' : ($product->typePayment == 'Mensal' ? 'selected' : '' ))); ?>>
                                                    Mensal (recorrente)
                                                </option>
                                                <option
                                                    value="Pacote Meses" <?php echo e(( old('typePayment') == 'Pacote Meses' ? 'selected' : ($product->typePayment == 'Pacote Meses' ? 'selected' : '' ))); ?>>
                                                    Pacote Meses (avulso)
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="days" class="form-label">Tempo de Plano (em dias)</label>
                                            <input name="days" class="form-control"
                                                   value="<?php echo e(old('days') ?? $product->days); ?>" <?php echo e(($product->recurrent == 'Produto' || $product->typePayment == 'Mensal') ? 'disabled' : ''); ?>>
                                        </div>
                                    </div>


                                    <h5 class="mb-3 mt-4">SEO</h5>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input name="title" class="form-control" id="form-row-email-input"
                                                       value="<?php echo e(old('title') ?? $product->title); ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="headline" class="form-label">Headline</label>
                                                <input name="headline" class="form-control"
                                                       value="<?php echo e(old('headline') ?? $product->headline); ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Slug</label>
                                                <input name="slug" class="form-control"
                                                       value="<?php echo e(old('slug') ?? $product->slug); ?>">
                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <h5 class="mb-3 mt-4">Descrição</h5>

                                <div class="row">

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Descrição</label>
                                        <textarea id="elm1" class="my-editor"
                                                  name="description"><?php echo e(old('description') ?? $product->description); ?></textarea>
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
                                            <?php $__currentLoopData = $product->images()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="row1" data-id="<?php echo e($image->id); ?>"
                                                    data-action="<?php echo e($product->id); ?>">
                                                    <td class="pl-3"><i class="fa fa-sort"></i></td>
                                                    <td>
                                                        <a class="image-popup-vertical-fit"
                                                           href="<?php echo e(url($image->path)); ?>"
                                                           title="<?php echo e($image->created_at); ?>">
                                                            <img src="<?php echo e(url($image->path)); ?>" width="130"
                                                                 class="img-fluid">
                                                        </a>
                                                    </td>
                                                    <td><?php echo e($image->created_at); ?></td>
                                                    <td><a href="javascript:void(0)"
                                                           class="btn btn-primary btn-sm waves-effect waves-light <?php echo e(($image->cover == true ? 'btn-success' : '')); ?> image-set-cover"
                                                           data-action="<?php echo e(route('admin.products.imageSetCover', ['image'=> $image->id])); ?>">
                                                            <i class="mdi mdi-camera-enhance"></i> Capa</a>
                                                        <a href="javascript:void(0)"
                                                           class="btn btn-danger btn-sm waves-effect waves-light image-remove"
                                                           data-action="<?php echo e(route('admin.products.imageRemove', ['image'=> $image->id])); ?>">
                                                            <i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

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
                    url: "<?php echo e(route('admin.products.imageOrder')); ?>",
                    data: {
                        order: order,
                        ref: $('tr.row1').data('action'),
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



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HipoPainel\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>