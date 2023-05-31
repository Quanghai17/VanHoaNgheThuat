<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="slider-section">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500"
                            data-thumb="upload/slider_02.jpg" data-saveperformance="off" data-title="Garden">
                            <img src="<?php echo e(Voyager::image( $banner->image )); ?>" alt="<?php echo e($banner->title); ?>"
                                 data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                 data-x="center"
                                 data-y="230"
                                 data-speed="1000"
                                 data-start="800"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                                
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
    <section class="section white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img width="100%" src="<?php echo e(Voyager::image($aboutHome->image)); ?>" alt="<?php echo e($aboutHome->title); ?>">
                </div>
                <div class="col-md-6 col-12">
                    <div class="general-title">
                        <h4 >Giới thiệu</h4>
                    </div>
                    <?php echo $aboutHome->body; ?>

                    <a style="float: left;" class="btn btn-primary" href="<?php echo e(route('about')); ?>">Xem thêm</a>
                </div>
            </div>
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
            <div class="general-title text-center">
                <h4>Lĩnh vực hoạt động</h4>
                <p class="lead">Chúng tôi tự hào với những lĩnh vực mà mình đang đầu tư!</p>
                <hr>
            </div><!-- end general title -->

            <div class="row module-wrapper text-center">
                <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-4 why-us">
                        <img width="100%" src="<?php echo e(Voyager::image( $field->image )); ?>" alt="<?php echo e($field->title); ?>"
                             class="wow fadeIn">
                        <strong><a href="<?php echo e(route('field.show', $field->slug)); ?>"><?php echo e($field->title); ?></a></strong>
                    
                    </div><!-- end col -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- end module-wrapper -->

            <hr class="invis">

            

        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="general-title text-center">
                <h4>Sản phẩm</h4>
                <p class="lead">Luôn mong muốn mang đến cho khách hàng những sản phẩm chất lượng!</p>
                <hr>
            </div><!-- end general title -->
            <div class="row module-wrapper text-center">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="entry">
                            <a href="<?php echo e(route('product.show', $product->slug)); ?>">
                            <img class="img-responsive" src="<?php echo e(Voyager::image( $product->image )); ?>"
                                 alt="<?php echo e($product->name); ?>">
                            
                        </div><!-- end entry -->
                        <h4><?php echo e($product->name); ?></h4>
                        <p><?php echo e($product->description); ?> </p>
                        </a>
                    </div><!-- end team_member -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- row -->
        </div><!-- end container -->
    </section><!-- end section -->

    

    

    <div id="owl-demo" class="owl-carousel owl-theme">
            <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section class="item section darkbg fullscreen paralbackground parallax"
                         style="background-image:url('assets/upload/parallax_01.jpg');" data-img-width="1688"
                         data-img-height="1125" data-diff="100">
                    <div class="overlay" style="background: url('assets/upload/parallax_01.jpg');"></div>
                    <div class="overlay customoverlay"></div>
                    <div class="container">
                        <a href="<?php echo e($val->url); ?>" target="_blank">
                            <div class="row text-center">
                                <div class="col-md-5">
                                    <div class="text-center image-center">
                                        <img src="<?php echo e(Voyager::image( $val->image )); ?>" alt="<?php echo e($val->title); ?>" class="img-responsive wow fadeInUp">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="videobg text-left">
                                        <h1 style="text-align: center"><?php echo e($val->title); ?></h1>
                                        <p><?php echo e($val->description); ?></p>

                                        <a style="float: right" href="<?php echo e($val->url); ?>" target="_blank"><button class="btn btn-default">Xem Trang</button></a>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </a>
                    </div><!-- end container -->

                </section><!-- end section -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
                
                <section class="section grey">
                    <div class="container">
                        <div class="general-title text-center">
                            <h4>Bài viết</h4>
                            <p class="lead">Những thông tin mới nhật sẽ được cập nhật tại đây</p>
                            <hr>
                        </div><!-- end general title -->

                        <div class="row module-wrapper blog-widget">
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="blog-wrapper">
                                        <div class="blog-title">
                                            <div class="blog-image">
                                                <a href="<?php echo e(route('blog.detail', $post->slug)); ?>" title=""><img
                                                        src="<?php echo e(Voyager::image( $post->image )); ?>"
                                                        alt="<?php echo e($post->title); ?>" class="img-responsive"></a>
                                            </div><!-- end image -->
                                            <a class="category_title" href="#" title=""> </a>
                                            <h2><a href="<?php echo e(route('blog.detail', $post->slug)); ?>"
                                                   title=""><?php echo e($post->title); ?></a></h2>
                                            <div class="post-meta">
                                                
                                                <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#"><?php echo e($post->created_at); ?></a>
                                    </span>
                                            </div>
                                            <p></p>
                                            <a href="<?php echo e(route('blog.detail', $post->slug)); ?>" class="readmore">Xem chi
                                                tiết</a>
                                        </div><!-- end desc -->
                                    </div><!-- end blog-wrapper -->
                                </div><!-- end col -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </section><!-- end section -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viethung/Desktop/Memo/home/laravel/anphuong/resources/views/frontend/homepage/index.blade.php ENDPATH**/ ?>