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
        <div class="row mb-2">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <div class="text-sm-end">
                    <a href="<?php echo e(route('admin.content.create')); ?>" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Novo</a>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <?php if(session()->exists('message')): ?>
                        <?php $__env->startComponent('admin.components.message',['type' => session()->get('type')]); ?>
                            <?php echo e(session()->get('message')); ?>

                        <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                    <?php endif; ?>

                    <?php if($contents): ?>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th width="3%">#</th>
                                <th>Nome</th>
                                <th>Status</th>
                                <th width="8%">Ações</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($content->id); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.content.edit', ['content' => $content->id])); ?>"><?php echo e($content->name); ?></a>
                                    </td>
                                    <td><span class="badge bg-<?php echo e(( $content->status == 1 ? 'success' : 'danger' )); ?>"><?php echo e(( $content->status == 1 ? 'Ativo' : 'Inativo' )); ?></span></td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" style="margin: 0px;">
                                                <li><a href="<?php echo e(route('admin.content.edit', ['content' => $content->id])); ?>" class="dropdown-item"><i class="mdi mdi-pen font-size-16 text-success me-1"></i> Editar</a></li>
                                                <form action="<?php echo e(route('admin.content.destroy', ['content' => $content->id])); ?>" method="post" onsubmit="if(!confirm('Deseja remover esse registro? Essa ação não pode ser desfeita.')){return false;}">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <li><button type="submit" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Deletar</button></li>
                                                </form>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                            <?php echo $contents->links(); ?>


                    <?php else: ?>
                        <h3>Nenhum registro encontrado</h3>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HipoPainel\resources\views/admin/content/index.blade.php ENDPATH**/ ?>