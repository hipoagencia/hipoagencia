<?php $__env->startSection('content'); ?>

    <div class="pt-70 pb-40 blog-line-top">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9">
                    <div class="text-uppercase pb-40">
                        <h2 class="color-blue"><?php echo e($post->name); ?></h2>
                    </div>
                </div>
                <div class="col col-lg-3 text-right">
                    <img
                        src="<?php echo e(url($post->princ->iconWhite)); ?>" width="37" ><span class="blog-category"
                                                                                style="color:<?php echo e($post->princ->color); ?>;"><?php echo e($post->princ->name); ?></span>
                </div>
            </div>



        </div>
    </div>


    <div class=" pb-70">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-9">
                    <div class="blog-line-bottom">

                        <div class="row mb-5">
                            <img src="<?php echo e(url($post->cover)); ?>" alt=""/>
                        </div>

                        <?php echo $post->description; ?>


                    </div>
                    <div class="container color-gray2">
                        <?php echo e($post->data); ?> por <?php echo e($post->user->name); ?>

                    </div>
                </div>
                <div class="col col-12 col-lg-3">
                    <h4 class="color-gray2">Veja também:</h4>

                    <div class="row">

                        <?php $__currentLoopData = $postsRelated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php echo $__env->make('web.components.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>
            </div>

        </div>
    </div>





    <div class="pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title text-left">
                        <h3 class="color-gray2">ÚLTIMOS ARTIGOS</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <a href="#" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
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

    <?php echo $__env->make('web.components.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/article.blade.php ENDPATH**/ ?>