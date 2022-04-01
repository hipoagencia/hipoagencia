<!doctype html>
<html lang="pt-br">
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NCB6BM8');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M5TBB98');</script>
    <!-- End Google Tag Manager -->


    <?php echo \Artesaos\SEOTools\Facades\SEOTools::generate(); ?>


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

    <meta name="facebook-domain-verification" content="6agjk75k4x8gwuftyfsutznsyp897h" />

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '259580705912598');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=259580705912598&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5Y95V4PG3M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5Y95V4PG3M');
    </script>



    <?php if (! empty(trim($__env->yieldContent('css')))): ?>
        <?php echo $__env->yieldContent('css'); ?>
    <?php endif; ?>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCB6BM8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5TBB98"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


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

<script type="text/javascript">
    $("#phone").mask("(00) 00000-0000");
</script>

<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "sRRfkNnJRA");s.setAttribute("src", "https://accessibilityserver.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://accessibilityserver.org">website accessibility</a></noscript>

<?php if (! empty(trim($__env->yieldContent('js')))): ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php endif; ?>

<script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\boston\resources\views/web/master/master.blade.php ENDPATH**/ ?>