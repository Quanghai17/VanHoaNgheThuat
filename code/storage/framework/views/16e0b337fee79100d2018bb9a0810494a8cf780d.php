<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="container container-bg">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo e(asset('/')); ?>">Trang chủ</a></li>
                        <li><?php echo e($title); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="block-wrapper section-bg">
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <h3><?php echo e($page->title); ?></h3>

                    <div class="widget contact-info">
                      <div class="content">
                        <?php echo $page->body ?? ''; ?>

                      </div>
                    </div>

                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tinhtoan/domains/vanhoanghethuatthainguyen.vn/public_html/resources/views/frontend/pages/index.blade.php ENDPATH**/ ?>