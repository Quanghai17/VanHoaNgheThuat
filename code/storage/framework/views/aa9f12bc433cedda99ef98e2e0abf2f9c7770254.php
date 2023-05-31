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

  <div style="padding-bottom: 25px;">
    <div class="container" id="layout-page-main">
      <div class="content-page">
        <?php if($page): ?>
          <?php echo $page->body; ?>

        <?php else: ?>
          <h5>Không tìm thấy trang</h5>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cssajhnthosting/public_html/resources/views/frontend/pages/index.blade.php ENDPATH**/ ?>