<?php $__env->startSection('content'); ?>


    <div class="main-banner-area">
        <div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-12 col-md-6 order-lg-last">

                        <div class="main-banner-content">
                            <h1>Novembro<br/>Azul</h1>
                            <p class="text-white">Dicas para defender da saúde</p><br>
                            <a href="https://saberdasaude.com.br/blog/article/novembro-azul" class="default-btn letter-3" style="background-color:#023970;" data-uw-styling-context="true">Clique e informe-se<span></span></a>
                        </div>

                    </div>
                    <div class="col col-12 col-md-6 order-lg-first">
                        <img src="<?php echo e(url(asset('web/assets/images/boston/woman.png'))); ?>" alt="Boston Health"/>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="specialities pt-70 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Conheça nossas especialidades</h2>
                <span>
                    Fique por dentro dos principais sintomas, diagnósticos, tratamentos e formas de prevenção
                    para condições clínicas que atingem milhares de brasileiros.
                </span>
            </div>
            <div class="row justify-content-center specialities-links">
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center mb-5">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/1.png'))); ?>"/>
                    <h5>Sistema Nervoso</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/3.png'))); ?>"/>
                    <h5>Coração</h5>

                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/2.png'))); ?>"/>
                    <h5>Sistema Urinário</h5>
                </div>

                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/4.png'))); ?>"/>
                    <h5>Cânceres e Tumores</h5>

                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center  mb-5">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/5.png'))); ?>"/>
                    <h5>Saúde Sexual</h5>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-70">
        <div class="container">
            <div class="section-title">
                <h2>Ou navegue pelo corpo</h2>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-6 text-center">

                    <span onclick="openBrain()" class="pointer"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/body/1.jpg'))); ?>"/></span>
                    <img src="<?php echo e(url(asset('web/assets/images/boston/body/2.jpg'))); ?>"/>
                    <span onclick="openHeart()" class="pointer"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/body/3.jpg'))); ?>"/></span>
                    <img src="<?php echo e(url(asset('web/assets/images/boston/body/4.jpg'))); ?>"/>
                    <span onclick="openUrine()" class="pointer"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/body/5.jpg'))); ?>"/></span>
                    <span onclick="openCancer()" class="pointer"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/body/6.jpg'))); ?>"/></span>
                    <span onclick="openSexual()" class="pointer"><img
                            src="<?php echo e(url(asset('web/assets/images/boston/body/7.jpg'))); ?>"/></span>
                    <img src="<?php echo e(url(asset('web/assets/images/boston/body/8.jpg'))); ?>"/>

                </div>

            </div>
        </div>
    </div>

    <?php echo $__env->make('web.components.categoriesSlide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="how-to-health pt-70 pb-70">
        <div class="container">
            <div class="section-title-blue">
                <h2>Como usar o Saber da Saúde?</h2>
            </div>
            <div class="row justify-content-center">

                <p class="w-75 text-white text-center f-18">O Saber da Saúde tem o objetivo de combater a desinformação
                    e ajudar na prevenção das condições clínicas que você encontra no portal. Todos os conteúdos são
                    desenvolvidos por médicos e especialistas, mas é importante deixar uma coisa bem clara: esse site
                    <b>NÃO SUBSTITUI SEU MÉDICO</b>.</p>

                <p class="f-22 text-center color-blue w-50">Se você ou alguém que você conhece apresenta quaisquer
                    sintomas, procure imediatamente um especialista.</p>

            </div>
        </div>
    </div>

    <?php echo $__env->make('web.components.lastArticles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->make('web.components.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/home.blade.php ENDPATH**/ ?>