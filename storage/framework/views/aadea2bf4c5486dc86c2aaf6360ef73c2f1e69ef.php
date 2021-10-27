<?php $__env->startSection('content'); ?>

    <div class="pt-70 pb-70 about-what-find blog-line-top">
        <div class="container">
            <div class="section-title text-uppercase pb-70">
                <h2>Termos de Uso</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <?php echo $content->description; ?>


            </div>
        </div>
    </div>




    <?php echo $__env->make('web.components.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/terms.blade.php ENDPATH**/ ?>