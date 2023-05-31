<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo e($index); ?>" class="<?php if($loop->first): ?> active <?php endif; ?>"></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item <?php if($loop->first): ?> active <?php endif; ?>">
            <img src="<?php echo e(Voyager::image($banner->image)); ?>" loading="lazy"
              alt="<?php echo e($banner->title); ?>" style="width:100%;">
            
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</div>

<!-- Content2 -->
<div class="container-fluid" id="c2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 text-center">
        <h2><?php echo e($aboutHome->excerpt); ?></h2>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6">
        <?php echo $aboutHome->body; ?>

      </div>
      <div class="col-lg-56 col-sm-6 col-md-6">
        <img src="<?php echo e(Voyager::image($aboutHome->image)); ?>" loading="lazy" alt="<?php echo e($aboutHome->excerpt); ?>" style="width: 100%; max-height: 315px; object-fit: cover;">
      </div>
    </div>
  </div>
</div>


<!-- Content3-->
<div class="container-fluid" id="c3">
  <div class="container" id="dichvu">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 text-center text-c3">
        <h3>CHÚNG TÔI CHUYÊN VỀ</h3>
      </div>
    </div>
    <div class="row dich-vu-mgb">
      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-sm-4 col-md-4">
          <a href="/services/<?php echo e($service->slug); ?>">
            <div class="dich-vu text-center">
              <div class="dich-vu-img">
                <img src="<?php echo e(Voyager::image($service->image)); ?>" alt="<?php echo e($service->title); ?>" loading="lazy">
              </div>
              <div class="noi-dung">
                <h4><?php echo e($service->title); ?></h4>
                <img src="<?php echo e(asset('assets/images/thanhvang.webp')); ?>" alt="" loading="lazy">
                <div style="display: flex; justify-content: center;">
                  <div style="text-align: left;"><?php echo $service->description; ?></div>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>



<style>
  #c4 .flex {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    align-items: stretch;
  }

  #c4 .flex .panel {
    height: 100%;
  }
</style>

<!-- Content4-->
<div class="container" id="c4">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center"></div>
    <div class="banggiapc"></div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
      <h3>QUY TRÌNH DỊCH VỤ</h3>
    </div>

    <div class="flex">
      <?php $__currentLoopData = $procedures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $procedure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 nopadding">
          <div class="panel <?php if($index==0): ?> maudo <?php elseif($index==1): ?> mauxanhduong <?php elseif($index==2): ?> mauvang <?php else: ?> mauxanh <?php endif; ?>">
            <div class="panel-body">
              <?php echo e($index + 1); ?>

            </div>
            <div class="panel-footer">
              
              <h5><?php echo e($procedure->title); ?></h5>
              <?php echo $procedure->body; ?>

            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </div>
</div>




<div class="container-fluid" id="c8" style="background: url(<?php echo e(Voyager::image($achievement->image)); ?>) no-repeat center; margin-bottom: 5rem;">
  <div class="container">
    <?php echo $achievement->body; ?>

  </div>
</div>






<!-- Content9-->
<div class="container-fluid" id="c9">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 text-center">
        <h3>TIN TỨC NỔI BẬT</h3>
      </div>

      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-sm-4 col-md-4">
          <div class="dvu">
            <a href="<?php echo e(route('blog.detail', [$post->slug])); ?>">
              <img class="img-responsive" src="<?php echo e(Voyager::image($post->thumbnail('cropped'))); ?>" alt="<?php echo e($post->title); ?>" loading="lazy">
            </a>
            <a href="<?php echo e(route('blog.detail', [$post->slug])); ?>"><h5><?php echo e($post->title); ?></h5></a>

            <a href="<?php echo e(route('blog.detail', [$post->slug])); ?>" class="hvr-bounce-to-right">Xem thêm</a>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cssajhnthosting/public_html/resources/views/frontend/homepage/index.blade.php ENDPATH**/ ?>