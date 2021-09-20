<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pedidos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Início</a></li>
                        <li class="breadcrumb-item active">Pedidos Cadastrados</li>
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
                                <th width="3%">#</th>
                                <th>Total</th>
                                <th>Tipo</th>
                                <th>Status</th>
                                <th>Código</th>
                                <th>Usuário</th>
                                <th width="8%">Ações</th>
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
                ajax: "<?php echo e(route('admin.orders.get')); ?>",
                order: [ [0, 'desc'] ],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'total', name: 'total'},
                    {data: 'type', name: 'type'},
                    {data: 'status', name: 'status'},
                    {data: 'code', name: 'code'},
                    {data: 'user_id', name: 'user_id'},
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

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HipoPainel\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>