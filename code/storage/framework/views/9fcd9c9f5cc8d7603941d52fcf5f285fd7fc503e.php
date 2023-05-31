<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="container">
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

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single-post">
                        <div class="post-title-area">
                            <h2 class="post-title"><?php echo e($title); ?></h2>
                            <div class="post-meta">
                                <span class="post-date"><i class="fa fa-clock-o"></i><?php echo e(date('d/m/Y', strtotime($document->created_at))); ?></span>
                            </div>

                            <div style="margin-top: 1rem">
                              <a href="<?php echo e(Voyager::image(json_decode($document->file)[0]->download_link)); ?>" target="_blank"> 
                                <i class="fa fa-download" style="margin-right:7px"></i> Tải về
                              </a>

                              <div style="margin-top: 1rem"></div>
                              <embed src="<?php echo e(Voyager::image(json_decode($document->file)[0]->download_link)); ?>" style="width: 100%; height: 800px" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                  <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div><!-- Sidebar Col end -->
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tinhtoan/domains/tinhtoan.kennatech.vn/public_html/resources/views/frontend/documents/show.blade.php ENDPATH**/ ?>