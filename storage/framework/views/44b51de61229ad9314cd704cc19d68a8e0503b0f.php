<?php $__env->startSection('content'); ?>


    <form class="form-horizontal" action="<?php echo e(route('login.do')); ?>" method="POST" autocomplete="false">
        <?php echo csrf_field(); ?>

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

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" type="email" placeholder="" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Senha</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control" name="password" placeholder="" type="password"
                       aria-label="Password" aria-describedby="password-addon" required>
                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i>
                </button>
            </div>
        </div>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember">
            <label class="form-check-label" for="remember-check">
                Lembre-me
            </label>
        </div>


        <div class="mb-3 mt-3">
            <?php echo NoCaptcha::renderJs(); ?> <?php echo NoCaptcha::display(); ?>

        </div>

        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Entrar</button>
        </div>

        <div class="mt-4 text-center">
            <a href="<?php echo e(route('register')); ?>" class="text-muted"><i class="mdi mdi-new-box me-1"></i> Criar conta</a>

            <a href="<?php echo e(route('recoverPassword')); ?>" class="text-muted"><i class="mdi mdi-lock me-1"></i> Esqueceu a
                senha?</a>
        </div>


    </form>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.masterLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boston\resources\views/admin/login.blade.php ENDPATH**/ ?>