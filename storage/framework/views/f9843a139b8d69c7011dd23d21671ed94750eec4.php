<div class="pt-70 pb-70 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>Assine nossa newsletter</h2>
        </div>
        <div class="row col-lg-4 offset-lg-4 justify-content-center text-center">

            <?php if($errors->all()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__env->startComponent('admin.components.message',['type' => 'danger']); ?>
                        <?php echo e($error); ?>

                    <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php if(session()->exists('message')): ?>
                <?php $__env->startComponent('admin.components.message',['type' => session()->get('type')]); ?>
                    <?php echo e(session()->get('message')); ?>

                <?php if (isset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5)): ?>
<?php $component = $__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5; ?>
<?php unset($__componentOriginalb2158729212260eca6d0367e479a03d4ff4c20f5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
            <?php endif; ?>

            <form action="<?php echo e(route('web.sendNewsletter')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <input type="email" name="email" placeholder="E-mail" class="form-control" value="<?php echo e(old('email')); ?>" style="height:54px;" required >

                <?php echo NoCaptcha::renderJs(); ?> <?php echo NoCaptcha::display(); ?>


                <div class="row pt-4">
                    <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;width: 120px;margin:0px auto;border-radius: 0px;">Enviar <i class="bx bx-send"></i><span></span></button>

                </div>
            </form>

        </div>
    </div>
</div>


<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/components/newsletter.blade.php ENDPATH**/ ?>