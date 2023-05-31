<?php
    $postfooter= \TCG\Voyager\Models\Post::limit(2)->get();
?>
<footer class="footer">
    <div class="container">
        <div class="row module-wrapper">

            <div class="col-md-4 col-sm-6">
                <div class="widget">
                    <div class="widget-title text-left">
                        <a class="navbar-brand text-center" href="<?php echo e(asset('/')); ?>">
                            <img src="<?php echo e(\TCG\Voyager\Facades\Voyager::image(setting('site.logo'))); ?>" alt="logo" style="height: 65px;margin: 0">
                        </a>
                        <br>
                        <h4><?php echo e(setting('site.description')); ?></h4>
                        <ul class="site-links" style="margin-top: 0">
                            <li><a target="_blank" href="https://<?php echo e(setting('site.website')); ?>"><i class="fa fa-link"></i><?php echo e(setting('site.website')); ?></a></li>
                            <li><a href="mailto:<?php echo e(setting('site.email')); ?>"><i class="fa fa-envelope"></i> <?php echo e(setting('site.email')); ?></a></li>
                            <li><a href="tel:<?php echo e(setting('site.phone')); ?>"><i class="fa fa-phone"></i><?php echo e(setting('site.phone')); ?></a></li>
                            <li><i class="fa fa-home"></i> <?php echo e(setting('site.address')); ?></li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end widget -->
            </div><!-- end col -->



            <div class="col-md-4 col-sm-6">
                <div class="widget">
                    <div class="widget-title">
                        <h4>Menu</h4>
                    </div>
                    <ul class="site-links">
                        <li><a href="<?php echo e(asset('/')); ?>">Trang chủ</a></li>
                        <li><a href="<?php echo e(route('about')); ?>">Giới thiệu</a></li>
                        <li><a href="<?php echo e(route('field.index')); ?>">Lĩnh vực hoạt động</a></li>
                        <li><a href="<?php echo e(route('product.index')); ?>">Sản phẩm</a></li>
                        <li><a href="<?php echo e(route('blogs')); ?>">Bài viết</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>">Liên hệ</a></li>
                    </ul>
                </div><!-- end widget -->
            </div><!-- end col -->
            <div class="col-md-4 col-sm-6">
                <div class="widget">
                    <div class="widget-title">
                        <h4>Bài viết mới</h4>
                    </div><!-- end title -->

                    <div class="recent-post-widget">
                        <ul class="recent-posts">
                            <?php $__currentLoopData = $postfooter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $postf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <p>
                                        <a href="<?php echo e(route('blog.detail', $postf->slug)); ?>">
                                            <img src="<?php echo e(Voyager::image( $postf->image )); ?>" alt="<?php echo e($postf->title); ?>" class="alignleft"><?php echo e($postf->title); ?>

                                        </a>
                                    </p>
                                    <span><?php echo e($postf->created_at); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul><!-- end latest-tweet -->
                    </div><!-- end twitter-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div>
</footer>

<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <p>© <?php echo e(date('Y')); ?> All Rights Reserved. Design and develop by <a style="color: orangered;" href="http://kennatech.vn" title="Kenna Technology">Kennatech</a></p>
            </div><!-- end col -->







        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
<?php /**PATH /home/viethung/Desktop/Memo/home/laravel/anphuong/resources/views/frontend/layouts/partials/footer.blade.php ENDPATH**/ ?>