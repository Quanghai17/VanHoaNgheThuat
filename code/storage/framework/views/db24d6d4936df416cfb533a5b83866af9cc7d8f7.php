<?php $__env->startSection('content'); ?>

  <div id="breadcrumbs" class="flexbox-container ">
    <div class="breadcrumb-inner">
      <div class="container">
        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
          <a href="<?php echo e(asset('/')); ?>" title="general.breadcrumbs.home_link_title">Trang chủ /</a>
          <span class="revicon-angle-right"></span>
          <span><?php echo e($title); ?></span>
        </nav>
      </div>
    </div>
  </div>

  <!-- Content2 -->
  <style>
    .c2-about h3 {
      margin-bottom: 30px;
    }
    .c2-about p {
      margin-top: 0 !important;
    }
  </style>
  <div class="container-fluid c2-about" id="c2">
    <div class="container">
      <div class="row">      
        <div class="col-lg-6 col-sm-6 col-md-6">
          <h3 style="text-align: left;"><?php echo e($about->excerpt); ?></h3>
          <?php echo $about->body; ?>

        </div>
        <div class="col-lg-56 col-sm-6 col-md-6">
          <img src="<?php echo e(Voyager::image($about->image)); ?>" loading="lazy" alt="<?php echo e($about->excerpt); ?>" style="width: 100%; max-height: 500px; object-fit: cover;">
        </div>
      </div>
    </div>
  </div>


  <?php if(count($whys) > 0): ?>
    <style>
      .vi-sao .flex {
        display: flex;
      }
      .vi-sao .flex .img {
        width: 50px;
        height: 50px;
        flex: none;
        overflow: hidden;
        margin-top: 10px; 
      }
      .vi-sao .flex .img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .vi-sao .flex h4 {
        font-size: 16px !important;
        font-weight: normal !important;
        padding: 0 0 0 15px;
        text-transform: initial !important;
      }

      .c-flex {
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
      }

      .c-col-3 {
        /* wi */
      }
    </style>

    <div class="container-fluid" id="c3" style="background: #cfe4ffb5">
      <div class="container" id="dichvu">
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-lg-12 col-sm-12 col-md-12 text-center text-c3">
            <h3 style="color: #1d64a4;">VÌ SAO LỰA CHỌN GIÚP VIỆC AN PHƯƠNG?</h3>
          </div>
        </div>
        <div class="c-flex vi-sao">
          <?php $__currentLoopData = $whys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $why): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-sm-6 col-12"> 
              <div class="flex">
                <div class="img">
                  <img src="<?php echo e(asset('/assets/images/v.png')); ?>" alt="v">
                </div>
                <h4 style="color: initial !important;"><?php echo $why->description; ?></h4>
              </div>
              
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cssajhnthosting/public_html/resources/views/frontend/aboutUs/index.blade.php ENDPATH**/ ?>