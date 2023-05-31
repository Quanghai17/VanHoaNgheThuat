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
            <h3 style="color: #1d64a4;">VÌ SAO NGƯỜI GIÚP VIỆC LỰA CHỌN CÔNG TY AN PHƯƠNG</h3>
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

  <?php if(count($personnels) > 0): ?>
    <style>
      .nhan-su {
        margin: 3rem auto;
      }

      .nhan-su h3 {
        color: #1d64a4;
      }

      .nhan-su .slide-item a {
        display: block;

      }
      .nhan-su .slide-item a img {
        width: 100%;
        height: auto;
      }

      .nhan-su .c-text {
        position: absolute;
        bottom: 2rem;
        left: 2rem;
        right: 2rem;
        padding: 1rem;
        border-radius: 4px;
        background: #2a8ce5cc;
        color: #fff;
      }

      .nhan-su .slide-item {
        position: relative;
        width: 100%;
      }

      .nhan-su .c-text h2 {
        font-size: 18px;
      }

      .nhan-su .swiper-button-prev,
      .nhan-su .swiper-button-next
      {
        visibility: hidden;
        background: #ffffffad;
        border-radius: 50%;
        width: 50px;
        font-size: 10px;
        height: 50px;
        --swiper-navigation-size: 27px;
        transform: translateX(calc(var(--x) * 1rem));
        opacity: 0;
        transition: all .3s ease-in-out;
      }

      .nhan-su .swiper-button-prev:hover,
      .nhan-su .swiper-button-next:hover {
        background: #1d64a4bd;
        color: #fff;
      }

      .nhan-su .swiper:hover .swiper-button-prev,
      .nhan-su .swiper:hover .swiper-button-next
      {
        visibility: visible;
        transform: translateX(0);
        opacity: 1;
      }
    </style>

    <div class="container nhan-su">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom: 2rem;">
    
          <h3 class="h3 logo">NGUỒN NHÂN SỰ</h3>
    
        </div>
        <div class="col-12 col-lg-11" style="margin: 2rem auto; float: initial;">
          <div id="personnel" class="swiper" style="width: 100%;">
            <div class="swiper-wrapper">
    
              <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                  <div class="slide-item">
                    <?php
                      $img_temp = explode('.',$personnel->image);
                      $img_url = $img_temp[0].'-cropped.'.$img_temp[1];
                    ?>
                    
                    <a href="#">
                      <img src="<?php echo e(Voyager::image($img_url)); ?>" class="img-responsive" alt="<?php echo e($personnel->title); ?>" loading="lazy">
                    </a>

                    <div class="c-text">
                      <h2><?php echo e($personnel->name); ?></h2>
                      <p><?php echo e($personnel->position); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
              <!--  Example item end -->
            </div>
            <div class="swiper-button-prev" style="--x: 1" href="#theCarousel" data-slide="prev"></div>
            <div class="swiper-button-next" style="--x: -1" href="#theCarousel" data-slide="next"></div>
          </div>
        </div>
      </div>
    </div>

    <script type="module">
      const swiperPerson = new Swiper('#personnel',{
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,

        breakpoints: {
          // when window width is >= 320px
          550: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          // when window width is >= 480px
          998: {
            slidesPerView: 3,
            spaceBetween: 30
          },
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

      })
    </script>
  <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/anphuong/domains/anphuong.kennatech.vn/public_html/resources/views/frontend/aboutUs/index.blade.php ENDPATH**/ ?>