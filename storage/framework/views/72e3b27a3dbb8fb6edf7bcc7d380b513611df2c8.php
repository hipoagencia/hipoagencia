<!doctype html>
<html lang="pt-br">
<head>

    <title><?php echo e(env('APP_NAME')); ?></title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/animate.min.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/meanmenu.css'))); ?>"/>
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/boxicons.min.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/flaticon.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/odometer.min.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/nice-select.min.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/owl.carousel.min.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/owl.theme.default.min.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/magnific-popup.min.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/style.css'))); ?>" />
    <link rel="stylesheet" href="<?php echo e(url(asset('web/assets/css/responsive.css'))); ?>" />

    <link rel="icon" type="image/png" href="<?php echo e(url(asset(env('INFO_FAVICON')))); ?>" />

    <?php if (! empty(trim($__env->yieldContent('css')))): ?>
        <?php echo $__env->yieldContent('css'); ?>
    <?php endif; ?>
</head>
<body>

<?php echo $__env->make('web.master.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('web.master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(url(asset('web/assets/js/jquery.min.js'))); ?>"></script>
<script src="<?php echo e(url(asset('web/assets/js/bootstrap.bundle.min.js'))); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="<?php echo e(url(asset('web/assets/js/jquery.meanmenu.js'))); ?>"></script>
<script src="<?php echo e(url(asset('web/assets/js/owl.carousel.min.js'))); ?>"></script>
<script src="<?php echo e(url(asset('web/assets/js/jquery.appear.js'))); ?>"></script>
<script src="<?php echo e(url(asset('web/assets/js/odometer.min.js'))); ?>"></script>
<script src="<?php echo e(url(asset('web/assets/js/nice-select.min.js'))); ?>"></script>
<script src="<?php echo e(url(asset('web/assets/js/jquery.magnific-popup.min.js'))); ?>"></script>

<script src="<?php echo e(url(asset('web/assets/js/form-validator.min.js'))); ?>"></script>

<script src="<?php echo e(url(asset('web/assets/js/wow.min.js'))); ?>"></script>
<script src="<?php echo e(url(asset('web/assets/js/main.js'))); ?>"></script>

<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>

<script type="text/javascript">
    $("#phone").mask("(00) 00000-0000");
</script>

<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "sRRfkNnJRA");s.setAttribute("src", "https://accessibilityserver.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://accessibilityserver.org">website accessibility</a></noscript>

<?php if (! empty(trim($__env->yieldContent('js')))): ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php endif; ?>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/master/master.blade.php ENDPATH**/ ?>