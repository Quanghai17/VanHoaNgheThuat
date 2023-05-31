<?php
  // $menuFields= App\Staticdata::where(['type' => 'linh-vuc-hoat-dong', 'status' => 'ACTIVE'])->get();

  $menu = menu('Home menu', '_json');
?>

<!-- Header start -->
<header id="header" class="header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="<?php echo e(Voyager::image(setting('site.home_banner'))); ?>" alt="Home banner" loadding="lazy" style="width: 100%" >
      </div>
      
    </div>
  </div>
</header>

<div class="main-nav clearfix">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg col">
        <div class="site-nav-inner float-left">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
             <!-- End of Navbar toggler -->

          <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
              <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li <?php if(count($item->children) > 0): ?> class="dropdown" <?php endif; ?>>
                  <a href="<?php echo e(asset($item->url)); ?>" <?php if(count($item->children) > 0): ?> class="dropdown-toggle" data-toggle="dropdown" <?php endif; ?>>
                    <?php echo e($item->title); ?> <?php if(count($item->children) > 0): ?> <i class="fa fa-angle-down"></i> <?php endif; ?>
                  </a>

                  <?php if(count($item->children) > 0): ?>
                    <ul class="dropdown-menu" role="menu">
                      <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="<?php echo e(asset($child->url)); ?>"><?php echo e($child->title); ?></a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul><!-- End dropdown -->
                  <?php endif; ?>
                </li><!-- Features menu end -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul><!--/ Nav ul end -->
          </div><!--/ Collapse end -->

        </div><!-- Site Navbar inner end -->
      </nav><!--/ Navigation end -->

      <div class="nav-search">
        <span id="search"><i class="fa fa-search"></i></span>
      </div><!-- Search end -->
      
      <div class="search-block" style="display: none;">
        <form action="<?php echo e(route('blogs')); ?>">
          <input type="text" class="form-control" name="search" placeholder="Nhập từ khóa bạn muốn tìm kiếm">
        </form>
        <span class="search-close">&times;</span>
      </div><!-- Site search end -->

    </div><!--/ Row end -->
  </div><!--/ Container end -->

</div><!-- Menu wrapper end --><?php /**PATH /home/tinhtoan/domains/tinhtoan.kennatech.vn/public_html/resources/views/frontend/layouts/partials/header.blade.php ENDPATH**/ ?>