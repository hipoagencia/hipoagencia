<?php $__env->startComponent('mail::message'); ?>
# Olá, você recebeu um novo contato

<p>Nome: <b><?php echo e($reply_name); ?></b></p>
<p>Email: <b><?php echo e($reply_email); ?></b></p>
<p>Telefone: <b><?php echo e($phone); ?></b></p>

<p>Mensagem:</p>
<?php $__env->startComponent('mail::panel'); ?>
    <?php echo e($message); ?>

<?php if (isset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c)): ?>
<?php $component = $__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c; ?>
<?php unset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Time,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\boston\resources\views/email/contact.blade.php ENDPATH**/ ?>