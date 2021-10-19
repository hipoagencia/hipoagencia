<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Posts</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Início</a></li>
                        <li class="breadcrumb-item active">Posts Cadastrados</li>
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
                    <form action="<?php echo e(route('admin.posts.update', ['post' => $post->id])); ?>" method="POST"
                          autocomplete="false"
                          enctype="multipart/form-data">


                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="id" value="<?php echo e($post->id); ?>">

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

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" class="form-control"
                                                   value="<?php echo e(old('name') ?? $post->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formrow-inputState" class="form-label">Autor</label>
                                            <select id="formrow-inputState" class="form-select" name="user_id">
                                                <option>Selecione o Autor..</option>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($user->id); ?>" <?php echo e(( $post->user_id == $user->id ? 'selected' : ( old('user_id') == $user->id ? 'selected' : '' ) )); ?>><?php echo e($user->name); ?> <?php echo e($user->last_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="formrow-inputState" class="form-label">Categoria Principal</label>
                                            <select id="formrow-inputState" class="form-select" name="principalcategory">
                                                <option>Selecione a categoria..</option>

                                                <option value="1" <?php echo e(( $post->principalcategory == '1' ? 'selected' : ( old('principalcategory') == '1' ? 'selected' : '' ) )); ?>>Sistema Nervoso</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Enfermidades</label>

                                        <select class="select2 form-control select2-multiple"
                                                multiple="multiple" name="categories[]"
                                                data-placeholder="Selecione a Enfermidade..">

                                            <?php $__currentLoopData = $categories->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                    value="<?php echo e($category->id); ?>" <?php echo e($category->id); ?>" <?php echo e(($post->categories->find($category->id) == true ? 'selected' : (in_array($category->id, old("categories") ?: []) ? "selected" : ""))); ?>><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>


                                    <div class="mb-3 mt-3">
                                        <textarea id="elm1" name="description" class="my-editor" ><?php echo e(old('description') ?? $post->description); ?></textarea>
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
                                            <img src="<?php echo e(url($post->cover)); ?>" class="img-fluid">
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
                                                   value="<?php echo e(old('title') ?? $post->title); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="headline" class="form-label">Headline</label>
                                            <input name="headline" class="form-control"
                                                   value="<?php echo e(old('headline') ?? $post->headline); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input name="slug" class="form-control"
                                                   value="<?php echo e(old('slug') ?? $post->slug); ?>">
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
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>
