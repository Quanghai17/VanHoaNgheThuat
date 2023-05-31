<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo e($page['meta_description'] ?? 'CÔNG TY TNHH SẢN XUẤT & THƯƠNG MẠI BIO-ORGANIC'); ?>"/>

    <title><?php echo e($page['title'] ?? 'Bio'); ?></title>


    <link rel="shortcut icon" href="<?php echo e(\TCG\Voyager\Facades\Voyager::image(setting('site.logo'))); ?>" type="image/png">










    <meta property="og:image" content="<?php echo e(\TCG\Voyager\Facades\Voyager::image($page['image'] ?? setting('site.logo'))); ?>" />
    <meta property="og:url" content="<?php echo e(\Request::fullUrl()); ?>" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="<?php echo e($page['title'] ?? 'Bio'); ?>" />
    <meta property="og:description" content="<?php echo e($page['meta_description'] ?? 'CÔNG TY TNHH SẢN XUẤT & THƯƠNG MẠI BIO-ORGANIC'); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/rs-plugin/css/settings.css')); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap-select.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/style.css')); ?>">

    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/custom.css')); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
<div class="preloader preloader-deactivate">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<div id="wrapper">
<?php echo $__env->make('frontend.layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('frontend.layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="hotline-phone-ring-wrap float-icon-hotline">
    <ul class="left-icon hotline">
        <li class="hotline_float_icon" style="left: 33px; bottom: -30px;">
            <a target="_blank" rel="nofollow" id="messengerButton"
               href="https://zalo.me/"><i
                    class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
        <li>
            <div class="hotline-phone-ring">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle"><a href="" class="pps-btn-img">
                        <img
                            src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"> </a></div>
            </div>
            <div class="hotline-bar">
                <a class="text-hotline" href="tel:<?php echo e(setting('site.phone')); ?>">
                    <?php echo e(setting('site.phone')); ?>

                </a>
            </div>
        </li>
    </ul>
</div>


<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/retina.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/parallax.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

<!-- SLIDER REV -->
<script src="<?php echo e(asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:600,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview2",
                touchenabled:"on",
                onHoverStop:"on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
                parallaxDisableOnMobile:"off",
                keyboardNavigation:"off",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                shadow:0,
                fullWidth:"on",
                fullScreen:"off",
                spinner:"spinner4",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                forceFullWidth:"off",
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffsetContainer: ""
            });
    });
</script>

<script src="<?php echo e(asset('assets/js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery-ui-timepicker-addon.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap-select.js')); ?>"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        $('.selectpicker').selectpicker();
        $( "#datepicker" ).datepicker();
    })(jQuery);
</script>


<?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH /home/viethung/Desktop/Memo/home/laravel/anphuong/resources/views/frontend/layouts/default.blade.php ENDPATH**/ ?>