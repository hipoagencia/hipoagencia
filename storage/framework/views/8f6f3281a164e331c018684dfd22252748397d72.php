

<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Conteúdos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Início</a></li>
                        <li class="breadcrumb-item active">Conteúdos Cadastrados</li>
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
                    <form action="<?php echo e(route('admin.content.update', ['content' => $content->id])); ?>" method="POST"
                          autocomplete="false">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <input type="hidden" name="id" value="<?php echo e($content->id); ?>">

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
                                                   value="<?php echo e(old('name') ?? $content->name); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option disabled>Selecione</option>
                                                <option
                                                    value="1" <?php echo e(( old('status') == '1' ? 'selected' : ($content->status == '1' ? 'selected' : '' ))); ?>>
                                                    Ativo
                                                </option>
                                                <option
                                                    value="0" <?php echo e(( old('status') == '0' ? 'selected' : ($content->status == '0' ? 'selected' : '' ))); ?>>
                                                    Inativo
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-3 mt-3">
                                        <textarea id="elm1" class="my-editor" name="description"><?php echo e(old('description') ?? $content->description); ?></textarea>
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
                                                   value="<?php echo e(old('title') ?? $content->title); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="headline" class="form-label">Headline</label>
                                            <input name="headline" class="form-control"
                                                   value="<?php echo e(old('headline') ?? $content->headline); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input name="slug" class="form-control"
                                                   value="<?php echo e(old('slug') ?? $content->slug); ?>">
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


<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/admin/content/edit.blade.php ENDPATH**/ ?>