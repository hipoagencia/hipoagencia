<?php $__env->startSection('content'); ?>

    <div class="main-banner-area">
        <div class="main-banner-item about-inside-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <br />

                    </div>
                    <div class="col-lg-6">

                        <div class="main-banner-content about-inside-content">
                            <h1>Com informação<br />a gente salva<br />mais vidas.</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="specialities pt-70">
        <div class="container">
            <div class="section-title">
                <span>
                    O Saber da Saúde é uma iniciativa da Boston Scientific<sup>TM</sup> com o objetivo de disseminar conhecimento científico sobre saúde para o maior número de brasileiros possível.
                    <br /><br />
                    A desinformação não pode ser um obstáculo para o acesso à saúde. Acreditamos que com informação confiável, pacientes e redes de apoio podem tomar decisões com mais agilidade, obtendo diagnósticos mais cedo e buscando tratamentos cada vez mais eficazes, oferecendo suporte mais adequado para as condições de cada paciente.
                </span>
            </div>
        </div>
    </div>


    <div class="pt-70 about-what-find">
        <div class="container">
            <div class="section-title text-uppercase pb-70">
                <h2>O que você encontra no Saber da Saúde?</h2>
            </div>
        </div>
    </div>

    <div class="about-what-find-blue">
        <div class="container  pb-70">
            <div class="row justify-content-center0">

                <div class="col-lg-4 text-center about-box-top">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/about/ico1.png'))); ?>" />
                    <h4>Análises e opiniões de especialistas em suas áreas de atuação.</h4>

                </div>

                <div class="col-lg-4 text-center about-box-top">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/about/ico2.png'))); ?>" />
                    <h4>
                        Conhecimento
                        científico profundo
                        sobre condições
                        clínicas.
                    </h4>

                </div>

                <div class="col-lg-4 text-center about-box-top">
                    <img src="<?php echo e(url(asset('web/assets/images/boston/about/ico3.png'))); ?>" />
                    <h4>
                        Informações
                        sobre os tratamentos
                        mais avançados disponíveis ao público.
                    </h4>

                </div>


            </div>
        </div>
    </div>





    <div class="how-to-health pt-70 pb-70">
        <div class="container">
            <div class="section-title-blue">
                <h2>Como usar o Saber da Saúde?</h2>
            </div>
            <div class="row justify-content-center">

                <p class=" text-white text-center">O Saber da Saúde tem o objetivo de combater a desinformação e ajudar na prevenção das condições clínicas que você encontra no portal. Todos os conteúdos são desenvolvidos por médicos e especialistas, mas é importante deixar uma coisa bem clara: esse site <b>NÃO SUBSTITUI SEU MÉDICO</b>.</p>

                <p class="text-center color-blue">Se você ou alguém que você conhece apresenta quaisquer sintomas, procure imediatamente um especialista.</p>

            </div>
        </div>
    </div>




    <?php echo $__env->make('web.components.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/about.blade.php ENDPATH**/ ?>