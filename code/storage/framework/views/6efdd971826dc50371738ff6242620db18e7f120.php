<?php $__env->startSection('content'); ?>
    <div class="page-title">
      <div class="container container-bg">
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

    <section class="block-wrapper section-bg">
      <div class="container container-bg">
        <div class="row">
          <div class="col-lg-8 col-md-12">
            
            <div class="single-post">
              
              <div class="post-title-area">
                <h2 class="post-title"><?php echo e($blog->title); ?></h2>
                <div class="post-meta">
                  <span class="post-date"><i class="fa fa-clock-o"></i><?php echo e(date('d/m/Y', strtotime($blog->created_at))); ?></span>
                </div>
              </div><!-- Post title end -->
  
              <div class="post-content-area">
                <div class="post-media post-featured-image">
                  <div class="gallery-popup cboxElement">
                    <img src="<?php echo e(Voyager::image($blog->image)); ?>" class="img-fluid" alt="" loading="lazy" style="width: 100%">
                  </div>
                </div>
                <div class="entry-content">
                  <?php echo $blog->body; ?>

                </div><!-- Entery content end -->
  
                <div class="share-items clearfix">
                   <ul class="post-social-icons unstyled">
                     <li class="facebook">
                       <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(request()->url()); ?>" target="_blank">
                       <i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
                     </li>
                     <li class="twitter">
                       <a href="http://twitter.com/share?url=<?php echo e(request()->url()); ?>" target="_blank">
                       <i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
                     </li>
                     <li class="gplus">
                       <a href="https://plus.google.com/share?url=<?php echo e(request()->url()); ?>" target="_blank">
                       <i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>
                     </li>
                     <li class="pinterest">
                       <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(request()->url()); ?>" target="_blank">
                       <i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>
                     </li>
                   </ul>
                 </div><!-- Share items end -->
  
              </div><!-- post-content end -->
            </div><!-- Single post end -->
  
            <div class="related-posts block">
              <h3 class="block-title"><span>Tin tức liên quan</span></h3>
              <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                <?php $__currentLoopData = $recentPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                  <div class="post-block-style clearfix">
                    <div class="post-thumb">
                      <a href="<?php echo e(route('blog.detail', $item->slug)); ?>">
                        <img class="img-fluid" src="<?php echo e(Voyager::image($item->image)); ?>" alt="" style="aspect-ratio: 4/3;object-fit: cover;"  loading="lazy/>
                      </a>
                    </div>
                    <div class="post-content">
                       <h2 class="post-title title-medium">
                         <a href="<?php echo e(route('blog.detail', $item->slug)); ?>"><?php echo e($item->title); ?></a>
                       </h2>
                       <div class="post-meta">
                         <span class="post-date"><?php echo e(date('d/m/Y', strtotime($item->created_at))); ?></span>
                       </div>
                     </div><!-- Post content end -->
                  </div><!-- Post Block style end -->
                </div><!-- Item 1 end -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div><!-- Content Col end -->
  
          <div class="col-lg-4 col-md-12">
              <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div><!-- Sidebar Col end -->
  
        </div><!-- Row end -->
      </div><!-- Container end -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tinhtoan/domains/vanhoanghethuatthainguyen.vn/public_html/resources/views/frontend/blog/blogDetail.blade.php ENDPATH**/ ?>