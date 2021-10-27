<div class="pt-40 pb-40 sub-footer">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-3 pt-4">
                <img src="<?php echo e(url(asset('web/assets/images/logo.png'))); ?>" alt="logo">
            </div>

            <div class="col-lg-6 pt-4">
                <h4>Siga o Saber da Saúde nas redes sociais <i class="bx bxl-facebook" style=" display:inline-block;vertical-align: bottom"></i> <i class="bx bxl-instagram"  style=" display:inline-block;vertical-align: bottom"></i></h4>
            </div>

            <div class="col-lg-3">
                <img src="<?php echo e(url(asset('web/assets/images/boston/boston.png'))); ?>" alt="logo">
            </div>

        </div>
    </div>
</div>

<footer class="footer-area">
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <div class="row align-items-center">
                    <div class="container">
                        <div class="col-lg-8 offset-lg-2 text-center footer-map">

                            <a href="<?php echo e(route('web.home')); ?>">Home</a>
                            <a href="#">Especialidades</a>
                            <a href="<?php echo e(route('web.about')); ?>">Sobre</a>
                            <a href="<?php echo e(route('web.blog')); ?>">Blog</a>
                            <a href="<?php echo e(route('web.contact')); ?>">Contato</a>
                            <a href="#">Coração</a>
                            <a href="#">Sistema Nervoso</a><br />
                            <a href="#">Sistema Urinário</a>
                            <a href="#">Saúde Sexual</a>
                            <a href="#">Câncer e Tumores</a>
                            <a href="<?php echo e(route('web.privacy')); ?>">Política de Privacidade</a>
                            <a href="<?php echo e(route('web.terms')); ?>">Termos de Uso</a>

                            <p class="mt-4">
                                © 2021 Boston Scientific Corporation ou suas afliliadas. Todo os direitos reservados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top:150px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;border:none;">

            <div class="modal-body text-center" style="color:#fff;">

                <form action="">

                    <div class="row">

                                <input type="text" name="name" id="name" style="height:52px;width:80%" class="form-control" required="" placeholder="O que deseja procurar?">
                                <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;width: 120px;margin:0px auto;border-radius: 0px;">Pesquisar <i class="bx bx-send"></i><span></span></button>


                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<style>
    .modal-backdrop {
        opacity: 0.9 !important;
    }
</style>

<div class="go-top">
    <i class='bx bx-chevron-up'></i>
</div>
<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/master/footer.blade.php ENDPATH**/ ?>