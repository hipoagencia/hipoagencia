<?php $__env->startSection('content'); ?>


    <div class="pt-70 pb-70 blog-line-top">
        <div class="container">
            <div class="section-title">
                <h2>Fale Conosco</h2>
            </div>
            <div class="row justify-content-center">


                <form action="<?php echo e(route('web.sendMail')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="row col-lg-6 offset-lg-3 text-center">

                        <p class="pb-4">O Saber da Saúde é uma iniciativa da Boston ScientificTM com o objetivo de disseminar conhecimento científico sobre saúde para o maior número de brasileiros possível.
                            O Saber da Saúde tem o objetivo de combater a desinformação e ajudar na prevenção das condições clínicas que você encontra no portal. Todos os conteúdos são desenvolvidos por médicos e especialistas, mas é importante deixar uma coisa bem clara: esse site NÃO SUBSTITUI SEU MÉDICO.
                        </p>

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="Nome completo">
                        </div>

                        <div class="form-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" required
                                   placeholder="E-mail">
                        </div>

                        <div class="form-group mb-3">
                            <input type="tel" name="phone" id="phone" class="form-control"  required
                                   placeholder="Telefone ex.: (xx) xxxxx-xxxx">
                        </div>


                        <div class="form-group mb-3">
                            <textarea  type="text" name="message" id="message" class="form-control" cols="40" rows="5" required=""
                                       placeholder="Digite sua mensagem"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">Enviar<span></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>


                    </div>
                </form>

            </div>
        </div>
    </div>




    <?php echo $__env->make('web.components.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/web/contact.blade.php ENDPATH**/ ?>
