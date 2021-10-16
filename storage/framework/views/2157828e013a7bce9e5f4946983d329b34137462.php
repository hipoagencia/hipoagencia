

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Usuários</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Início</a></li>
                        <li class="breadcrumb-item active">Usuários Cadastrados</li>
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
                    <a href="<?php echo e(route('admin.users.create')); ?>"
                       class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                            class="mdi mdi-plus me-1"></i> Novo</a>
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

                    <table class="table table-bordered dt-responsive nowrap w-100 yajra-datatable">
                        <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th>Título</th>
                            <th>CPF</th>
                            <th>Criado em</th>
                            <th>Perfil</th>
                            <th>Log</th>
                            <th width="5%">Login</th>
                            <th width="5%">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script type="text/javascript">
        $(function () {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e((request()->get('adm') == 0) ? route('admin.users.get',['adm'=>'0']) : route('admin.users.get',['adm'=>'1'])); ?>",
                order: [[0, 'desc']],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'document', name: 'document'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'role', name: 'role'},
                    {data: 'log', name: 'log'},
                    {data: 'login', name: 'login'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/admin/users/index.blade.php ENDPATH**/ ?>