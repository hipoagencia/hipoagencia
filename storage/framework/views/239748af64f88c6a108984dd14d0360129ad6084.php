<?php $__env->startSection('content'); ?>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
         style="<?php echo e((request()->route()->getName() == 'web.search' ? 'display:none' : '')); ?> <?php echo e((request()->route()->getName() == 'web.category' ? 'display:none' : '')); ?>">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#"><img src="<?php echo e(url(asset('web/assets/images/banner/marco.jpg'))); ?>" class="d-block w-100"
                                 alt=""></a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo e(route('web.category', ['slug' => 'sistema-nervoso','id' => '1'])); ?>"><img
                        src="<?php echo e(url(asset('web/assets/images/banner/nervoso.jpg'))); ?>" class="d-block w-100"
                        alt=""></a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo e(route('web.category', ['slug' => 'coracao','id' => '2'])); ?>"><img
                        src="<?php echo e(url(asset('web/assets/images/banner/coracao.jpg'))); ?>" class="d-block w-100"
                        alt=""></a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo e(route('web.category', ['slug' => 'sistema-urinario','id' => '3'])); ?>"><img
                        src="<?php echo e(url(asset('web/assets/images/banner/urinario.jpg'))); ?>" class="d-block w-100"
                        alt=""></a>
            </div>

            <div class="carousel-item">
                <a href="<?php echo e(route('web.category', ['slug' => 'canceres-e-tumores','id' => '4'])); ?>"><img
                        src="<?php echo e(url(asset('web/assets/images/banner/tumor.jpg'))); ?>" class="d-block w-100"
                        alt=""></a>
            </div>

            <div class="carousel-item">
                <a href="<?php echo e(route('web.category', ['slug' => 'saude-sexual','id' => '5'])); ?>"><img
                        src="<?php echo e(url(asset('web/assets/images/banner/sexual.jpg'))); ?>" class="d-block w-100"
                        alt=""></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="pt-70 pb-70 <?php echo e((request()->route()->getName() == 'web.category' ? 'blog-line-top' : '')); ?>" style="<?php echo e((request()->route()->getName() == 'web.search' ? 'display:none' : '')); ?>">
        <div class="container">
            <div class="row pb-70">
                <div class="text-left">
                    <h2>Filtrar por especialidade</h2>
                    <span>
                        Clique para exibir apenas artigos de uma especialidade clínica.
                    </span>
                </div>
            </div>
            <div class="row justify-content-center specialities2-links">


                <div
                    class="col text-center bg-spec-gray2 blue-hover pointer <?php echo e((request()->route()->slug == 'sistema-nervoso' ? 'blue-h' : '')); ?>">
                    <a href="<?php echo e(route('web.category', ['slug' => 'sistema-nervoso','id' => '1'])); ?>"  style="width:90px !important;"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/ico/1.png'))); ?>"/></a>
                    <h5>Sistema Nervoso</h5>
                </div>
                <div
                    class="col text-center bg-spec-gray2 red-hover pointer <?php echo e((request()->route()->slug == 'coracao' ? 'red-h' : '')); ?>">
                    <a href="<?php echo e(route('web.category', ['slug' => 'coracao','id' => '2'])); ?>"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/ico/3.png'))); ?>"  style="width:90px !important;"/></a>
                    <h5>Coração<br class="d-lg-none"/><br class="d-lg-none"/></h5>
                </div>
                <div
                    class="col text-center bg-spec-gray2 green-hover <?php echo e((request()->route()->slug == 'sistema-urinario' ? 'green-h' : '')); ?>">
                    <a href="<?php echo e(route('web.category', ['slug' => 'sistema-urinario','id' => '3'])); ?>"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/ico/2.png'))); ?>"  style="width:90px !important;"/></a>
                    <h5>Sistema Urinário</h5>
                </div>
                <div
                    class="col text-center bg-spec-gray2 orange-hover <?php echo e((request()->route()->slug == 'canceres-e-tumores' ? 'orange-h' : '')); ?>">
                    <a href="<?php echo e(route('web.category', ['slug' => 'canceres-e-tumores','id' => '4'])); ?>"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/ico/4.png'))); ?>"  style="width:90px !important;"/></a>
                    <h5>Cânceres e Tumores</h5>
                </div>
                <div
                    class="col text-center bg-spec-gray2 purple-hover <?php echo e((request()->route()->slug == 'saude-sexual' ? 'purple-h' : '')); ?>">
                    <a href="<?php echo e(route('web.category', ['slug' => 'saude-sexual','id' => '5'])); ?>"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/ico/5.png'))); ?>"  style="width:90px !important;"/></a>
                    <h5>Saúde Sexual</h5>
                </div>
                <div
                    class="col text-center bg-spec-gray2 gray-hover2 <?php echo e((request()->route()->slug == 'novidades' ? 'gray-h' : '')); ?>">
                    <a href="<?php echo e(route('web.category', ['slug' => 'novidades','id' => '6'])); ?>"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/ico/6.png'))); ?>"  style="width:90px !important;"/></a>
                    <h5>Novidades</h5>
                </div>


            </div>

        </div>
    </div>

    <style>
        .page-item.active .page-link{
            background-color: #023970 !important;
            border-color: #023970 !important;
        }

    </style>


    <?php echo $__env->make('web.components.categoriesSlide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="pt-70 pb-70" id="b">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title text-left">
                        <h3 class="color-gray2"><?php echo e((request()->route()->getName() == 'web.search' ? 'RESULTADO' : 'ÚLTIMOS ARTIGOS')); ?></h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <br>


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

    <div class="container">
        <div class="row">
            <?php echo e($posts->render("pagination::bootstrap-4")); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/blog.blade.php ENDPATH**/ ?>