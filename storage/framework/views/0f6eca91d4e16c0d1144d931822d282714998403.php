<div class="pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title text-left">
                    <h3 class="color-gray2">ÚLTIMOS ARTIGOS</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <a href=<?php echo e(route('web.blog')); ?>" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
                        class="bx bxs-chevron-right"></i><span></span></a>
            </div>
        </div>
        <div class="row justify-content-center">

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <?php echo $__env->make('web.components.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/components/lastArticles.blade.php ENDPATH**/ ?>