<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo e(asset('/')); ?>">Trang chủ</a></li>
                        <li><?php echo e($title); ?></li>
                    </ol>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <div class="block category-listing category-style2">
                        <h3 class="block-title"><span><?php echo e($title); ?></span></h3>

                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="post-block-style post-list clearfix">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="post-thumb thumb-float-style">
                                            <a href="<?php echo e(route('blog.detail', $post->slug)); ?>">
                                                <img class="img-fluid" src="<?php echo e(Voyager::image($post->image)); ?>"
                                                    alt="" loading="lazy" style="aspect-ratio: 3/2;object-fit: cover;">
                                            </a>
                                            
                                        </div>
                                    </div><!-- Img thumb col end -->

                                    <div class="col-lg-7 col-md-6">
                                        <div class="post-content">
                                            <h2 class="post-title title-large">
                                                <a href="<?php echo e(route('blog.detail', $post->slug)); ?>"><?php echo e($post->title); ?></a>
                                            </h2>
                                            <p><?php echo e($post->excerpt); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if(count($blogs) == 0): ?>
                            <h3>Không tìm thấy bài viết nào!</h3>
                        <?php endif; ?>

                    </div><!-- Block Technology end -->

                    <?php echo e($blogs->links('frontend.layouts.partials.paginate')); ?>


                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tinhtoan/domains/tinhtoan.kennatech.vn/public_html/resources/views/frontend/blog/index.blade.php ENDPATH**/ ?>