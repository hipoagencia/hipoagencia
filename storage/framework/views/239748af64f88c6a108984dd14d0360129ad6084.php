<?php $__env->startSection('content'); ?>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(url(asset('web/assets/images/boston/article/slider1.jpg'))); ?>" class="d-block w-100"
                     alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(url(asset('web/assets/images/boston/article/slider1.jpg'))); ?>" class="d-block w-100"
                     alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(url(asset('web/assets/images/boston/article/slider1.jpg'))); ?>" class="d-block w-100"
                     alt="">
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

    <div class="pt-70 pb-70">
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

                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer"
                     onclick="openBrain()">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/1.png'))); ?>"/>
                    <h5>Sistema Nervoso</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer" onclick="openHeart()">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/3.png'))); ?>"/>
                    <h5>Coração<br class="d-lg-none"/><br class="d-lg-none"/></h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer" onclick="openUrine()">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/2.png'))); ?>"/>
                    <h5>Sistema Urinário</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer" onclick="openCancer()">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/4.png'))); ?>"/>
                    <h5>Cânceres e Tumores</h5>
                </div>
                <div class="col col-6 col-lg-2 col-md-6 col-sm-6 text-center bg-spec-gray2 pointer" onclick="openSexual()">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/ico/5.png'))); ?>"/>
                    <h5>Saúde Sexual</h5>
                </div>

            </div>
        </div>
    </div>


    <?php echo $__env->make('web.components.categoriesSlide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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


                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="<?php echo e(url(asset('web/assets/images/boston/ico/ico-coracao.png'))); ?>"/> Coração
                            </h5>
                        </div>

                        <img src="<?php echo e(url(asset('web/assets/images/boston/img-blog.jpg'))); ?>"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="<?php echo e(route('web.article', ['slug' => 'aqui-vai-o-titulo-da-materia'])); ?>"
                               class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="<?php echo e(url(asset('web/assets/images/boston/ico/ico-coracao.png'))); ?>"/> Coração
                            </h5>
                        </div>

                        <img src="<?php echo e(url(asset('web/assets/images/boston/img-blog.jpg'))); ?>"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="<?php echo e(url(asset('web/assets/images/boston/ico/ico-coracao.png'))); ?>"/> Coração
                            </h5>
                        </div>

                        <img src="<?php echo e(url(asset('web/assets/images/boston/img-blog.jpg'))); ?>"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>


                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="<?php echo e(url(asset('web/assets/images/boston/ico/ico-coracao.png'))); ?>"/> Coração
                            </h5>
                        </div>

                        <img src="<?php echo e(url(asset('web/assets/images/boston/img-blog.jpg'))); ?>"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="<?php echo e(url(asset('web/assets/images/boston/ico/ico-coracao.png'))); ?>"/> Coração
                            </h5>
                        </div>

                        <img src="<?php echo e(url(asset('web/assets/images/boston/img-blog.jpg'))); ?>"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="blog-post">
                        <div class="blog-post-title" style="background-color: #ac1d2e;">
                            <h5 class="font-light"><img
                                    src="<?php echo e(url(asset('web/assets/images/boston/ico/ico-coracao.png'))); ?>"/> Coração
                            </h5>
                        </div>

                        <img src="<?php echo e(url(asset('web/assets/images/boston/img-blog.jpg'))); ?>"/>
                        <h3 class="mt-3" style="color: #ac1d2e;">Título da Matéria</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>

                        <div class="row read-more">
                            <a href="#" class="text-right">Continue lendo</a>
                        </div>

                    </article>
                </div>


            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/blog.blade.php ENDPATH**/ ?>