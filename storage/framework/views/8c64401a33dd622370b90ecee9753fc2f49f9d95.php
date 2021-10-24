<?php $__env->startSection('content'); ?>


    <div class="pt-70 pb-70 blog-line-top">
        <div class="container">
            <div class="section-title">
                <h2>Fale Conosco</h2>
            </div>
            <div class="row justify-content-center">

                <form id="contactForm" novalidate="true">
                    <div class="row col-lg-6 offset-lg-3">

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="Nome completo">
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="E-mail">
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" required=""
                                   placeholder="Telefone">
                        </div>


                        <div class="form-group mb-3">
                            <textarea  type="text" name="name" id="name" class="form-control" cols="40" rows="5" required=""
                                       placeholder="Digite sua mensagem"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">Enviar <i class="bx bx-send"></i><span></span></button>
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