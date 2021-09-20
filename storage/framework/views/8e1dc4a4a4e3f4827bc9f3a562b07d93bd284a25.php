<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta name="robots" content="noindex"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="<?php echo e(url(asset(env('info_favicon')))); ?>">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>


    <?php echo \Livewire\Livewire::styles(); ?>


    <?php if (! empty(trim($__env->yieldContent('css')))): ?>
        <?php echo $__env->yieldContent('css'); ?>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

</head>
<body>

<div class="row m-5">
    <div class="container">

        Você é um usuário comum e está logado<br>
        <a href="<?php echo e(route('user.dashboard')); ?>">início</a>
        |
        <a href="<?php echo e(route('user.profile')); ?>">perfil</a>
        |
        <a href="<?php echo e(route('logout')); ?>">logout</a>

        <?php if(auth()->user()->is_admin): ?>
            |
            <a href="<?php echo e(route('admin.dashboard')); ?>">Painel Administrativo</a>
        <?php endif; ?>

    </div>
</div>


<?php echo e($slot); ?>



<script src="<?php echo e(url(asset('backend/assets/libs/jquery/jquery.min.js'))); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


<?php echo \Livewire\Livewire::scripts(); ?>


<?php if (! empty(trim($__env->yieldContent('js')))): ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php endif; ?>



</body>
</html>

<?php /**PATH C:\xampp\htdocs\HipoPainel\resources\views/user/master/master.blade.php ENDPATH**/ ?>