<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo e($pageMeta['meta_description'] ?? setting('site.description')); ?>" />
    <meta name="content" content="<?php echo e($pageMeta['meta_content'] ?? setting('site.content')); ?>" />

    <title><?php echo e($pageMeta['title'] ?? setting('site.title')); ?></title>

    <link rel="shortcut icon" href="<?php echo e(\TCG\Voyager\Facades\Voyager::image(setting('site.logo'))); ?>" type="image/png">

    <meta property="og:image"
        content="<?php echo e(\TCG\Voyager\Facades\Voyager::image($pageMeta['image'] ?? setting('site.logo'))); ?>" />
    <meta property="og:url" content="<?php echo e(\Request::fullUrl()); ?>" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="<?php echo e($pageMeta['title'] ?? setting('site.title')); ?>" />
    <meta property="og:description" content="<?php echo e($pageMeta['meta_description'] ?? setting('site.description')); ?>" />
    <meta property="og:content" content="<?php echo e($pageMeta['meta_content'] ?? setting('site.content')); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <?php echo $__env->yieldContent('style'); ?>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
    <!-- Colorbox -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/colorbox.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
      <![endif]-->
</head>

<body>

    <div class="body-inner">


        <?php echo $__env->make('frontend.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('frontend.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



        <!-- Javascript Files
 ================================================== -->

        <!-- initialize jQuery Library -->
        
        <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
        <!-- Popper Jquery -->
        <script type="text/javascript" src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
        <!-- Bootstrap jQuery -->
        <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
        <!-- Color box -->
        <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.colorbox.js')); ?>"></script>
        <!-- Smoothscroll -->
        <script type="text/javascript" src="<?php echo e(asset('assets/js/smoothscroll.js')); ?>"></script>

        <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.marquee.min.js')); ?>"></script>

        <!-- Template custom -->
        <script type="text/javascript" src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

        <!-- Magnific Popup core JS file -->
        <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>

        <script>
            window.addEventListener("load", (event) => {
                jQuery(document).ready(function($) {
                    $('.image-link').magnificPopup({
                        type: 'image'
                    });
                });
            });
        </script>

    </div><!-- Body inner end -->



    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH /home/tinhtoan/domains/tinhtoan.kennatech.vn/public_html/resources/views/frontend/layouts/default.blade.php ENDPATH**/ ?>