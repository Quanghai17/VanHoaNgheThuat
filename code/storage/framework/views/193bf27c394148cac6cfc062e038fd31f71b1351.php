<?php
    $postfooter= \TCG\Voyager\Models\Post::limit(2)->get();
    $images = \App\Staticdata::where('slug','thu-vien-anh')->first();
    $popular = \TCG\Voyager\Models\Post::where('featured', 1)->latest()->limit(3)->get();

    $categories = \TCG\Voyager\Models\Category::where('parent_id', null)->withCount('posts')->inRandomOrder()->limit(7)->get();
?>

<style>
  .custom-footer *{
    color: #a3a3a3
  }

  .custom-footer h5{
    margin-top: 1rem;
  }

  .custom-footer a:hover{
    color: #ec0000;
  }
</style>

<footer id="footer" class="footer">
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-12 footer-widget">
          <h3 class="widget-title">Thông tin</h3>
          <div class="list-post-block custom-footer ">
           

            <h5 style><?php echo e(setting('site.title')); ?></h5>

            <p><b>Địa chỉ</b> : <?php echo e(setting('site.address')); ?></p>
            <p><b>Email</b> : <a href="mailto:<?php echo e(setting('site.email')); ?>"><?php echo e(setting('site.email')); ?></a></p>
            <p><b>Số điện thoại</b> :  <a href="tel:<?php echo e(setting('site.phone')); ?>"><?php echo e(setting('site.phone')); ?></a></p>
          </div>
          
        </div>

        <div class="col-lg-3 col-sm-12 footer-widget widget-categories">
          <h3 class="widget-title">Danh mục</h3>
          <ul>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a href="<?php echo e(route('category', $item->slug)); ?>">
                  <span class="catTitle"><?php echo e($item->name); ?></span><span class="catCounter"> (<?php echo e($item->posts_count); ?>)</span>
                </a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          
        </div>

        <div class="col-lg-3 col-sm-12 footer-widget">
          <h3 class="widget-title">Tin tức nổi bật</h3>
          <div class="list-post-block">
            <ul class="list-post">
              <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="clearfix">
                  <div class="post-block-style post-float clearfix">
                    <div class="post-thumb">
                      <a href="<?php echo e(route('blog.detail', $post->slug)); ?>">
                        <img class="img-fluid" src="<?php echo e(Voyager::image($post->image)); ?>" alt="" loading="lazy"/>
                      </a>
                    </div><!-- Post thumb end -->

                    <div class="post-content">
                      <h2 class="post-title title-small">
                        <a href="<?php echo e(route('blog.detail', $post->slug)); ?>" class="line-clamp-2"><?php echo e($post->title); ?></a>
                      </h2>
                      <div class="post-meta">
                        <span class="post-date"><?php echo e(date('d/m/Y', strtotime($post->created_at))); ?></span>
                      </div>
                    </div><!-- Post content end -->
                  </div><!-- Post block style end -->
                </li><!-- Li 1 end -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-sm-12 footer-widget">
          <h3 class="widget-title">Thư viện ảnh</h3>
          <div class="row" style="margin: 0 -6px">
            <?php $__currentLoopData = json_decode($images->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($key >= 9): ?>
                <?php break; ?>
              <?php endif; ?>
              <a href="<?php echo e(Voyager::image($item)); ?>" class="image-link col-4" style="padding: 0 3px; margin-bottom: 6px">
                <img class="" src="<?php echo e(Voyager::image($item)); ?>" alt="" style="aspect-ratio: 4/3; object-fit: cover;display: block;
                width: 100%;max-width: initial;min-height: initial;" loading="lazy"/>
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div><!-- Col end -->

      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->

  

</footer><!-- Footer end -->

<div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="copyright-info text-center">
            <span>Copyright © <?php echo e(date('Y')); ?> <?php echo e(setting('site.title')); ?> All Rights Reserved</span>
          </div>
        </div>

        
      </div><!-- Row end -->

      <div id="back-to-top" class="back-to-top">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
 </div><!-- Copyright end -->

<?php if(\Session::has('success')): ?>
  <script type="text/javascript">
    window.alert("<?php echo \Session::get('success'); ?>")
  </script>
<?php endif; ?>
<!-- END OF FOOTER --><?php /**PATH /home/tinhtoan/domains/vanhoanghethuatthainguyen.vn/public_html/resources/views/frontend/layouts/partials/footer.blade.php ENDPATH**/ ?>