<div class="pt-70 pb-70 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>Assine nossa newsletter</h2>
        </div>
        <div class="row col-lg-4 offset-lg-4 justify-content-center text-center">

            <input type="text" placeholder="E-mail" class="form-control" style="height:54px;">

            <?php echo NoCaptcha::renderJs(); ?> <?php echo NoCaptcha::display(); ?>


            <div class="row pt-4">
                <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;width: 120px;margin:0px auto;border-radius: 0px;">Enviar <i class="bx bx-send"></i><span></span></button>

            </div>

        </div>
    </div>
</div>


<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/components/newsletter.blade.php ENDPATH**/ ?>