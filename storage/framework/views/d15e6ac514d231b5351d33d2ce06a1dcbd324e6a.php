<?php $__env->startSection('content'); ?>


    <div class="main-banner-area">
        <div class="main-banner-item specialities-banner specialities-banner-sexual">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">

                        <div class="main-banner-content specialities-inside-content">
                            <img src="<?php echo e(url(asset('web/assets/images/boston/ico/2.png'))); ?>" class="ico-img"><br><br>
                            <h1>Saúde Sexual</h1>
                            <p>Tudo o que você precisa saber sobre as principais condições clínicas, direto de médicos e
                                especialistas. Isso sim é saúde.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="specialities-content pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="f-22">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla placerat convallis volutpat. Vestibulum in ante urna. Donec a eleifend urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
                </span>
            </div>
        </div>
    </div>


    <div class="specialities-red" style="background-color:#8f6cb3 !important;">
        <div class="container  pb-40">
            <div class="row justify-content-center0">

                <div class="col-lg-4 text-center about-box-top">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/specialities/ico1_sexual.png'))); ?>" class="w-50"/>
                    <h5>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h5>
                </div>

                <div class="col-lg-4 text-center specialities-red-box-top">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/specialities/ico1_sexual.png'))); ?>" class="w-50"/>
                    <h5>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h5>

                </div>

                <div class="col-lg-4 text-center about-box-top">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/specialities/ico1_sexual.png'))); ?>" class="w-50"/>
                    <h5>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h5>

                </div>


            </div>
        </div>
    </div>



    <div class="pt-70 pb-70 bg-gray">
        <div class="container">
            <div class="section-title">
                <h2 style="color: #8f6cb3;">Condições Clínicas</h2>
                <span class="f-22 mt-2">
                    Selecione a patologia desejada e saiba mais sobre causas, sintomas, tratamentos
                    e formas de prevenir as principais doenças cardíacos.
                </span>
            </div>
            <div class="row justify-content-center text-center">

                <a href="#" style="background-color: #8f6cb3;" class="btn-conditions">Fibrilação Atrial</a>
                <a href="#" style="background-color: #8f6cb3;" class="btn-conditions">AVC</a>
                <a href="#" style="background-color: #8f6cb3;" class="btn-conditions">Morte Súbita</a>

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

                    <a href="<?php echo e(route('web.category', ['slug' => 'sistema-nervoso','id' => '2'])); ?>" class="default-btn float-lg-end letter-3">VEJA MAIS ARTIGOS <i
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

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/specialtySexual.blade.php ENDPATH**/ ?>