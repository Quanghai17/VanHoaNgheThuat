<?php
    $menuFields= App\Staticdata::where(['type' => 'linh-vuc-hoat-dong', 'status' => 'ACTIVE'])->get();
?>























<header class="header">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <nav class="navbar yamm navbar-default">
                    <div class="container-full">
                        <div class="navbar-table" style="vertical-align: middle">
                            <div class="navbar-cell">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="<?php echo e(asset('/')); ?>"><img src="<?php echo e(\TCG\Voyager\Facades\Voyager::image(setting('site.logo'))); ?>" alt="logo" style="height: 85px"></a>
                                    <div>
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                </div><!-- end navbar-header -->
                            </div><!-- end navbar-cell -->

                            <div class="navbar-cell stretch">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                    <div class="navbar-cell">
                                        <ul class="nav navbar-nav navbar-right" style="text-transform: uppercase;">
                                            
                                            <li><a href="<?php echo e(asset('/')); ?>">Trang chủ</a></li>
                                            <li><a href="<?php echo e(route('about')); ?>">Giới thiệu</a></li>

                                            <li class="dropdown has-submenu">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lĩnh vực hoạt động <span class="fa fa-angle-down"></span></a>
                                                <ul class="dropdown-menu start-left" role="menu">
                                                    <?php $__currentLoopData = $menuFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a href="<?php echo e(route('field.show', $menuField->slug)); ?>"><?php echo e($menuField->title); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo e(route('product.index')); ?>">Sản phẩm</a></li>
                                            <li><a href="<?php echo e(route('blogs')); ?>">Bài viết</a></li>
                                            <li><a href="<?php echo e(route('contact')); ?>">Liên hệ</a></li>
                                        </ul>
                                    </div><!-- end navbar-cell -->
                                </div><!-- /.navbar-collapse -->
                            </div><!-- end navbar cell -->
                        </div><!-- end navbar-table -->
                    </div><!-- end container fluid -->
                </nav><!-- end navbar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</header>
<?php /**PATH /home/viethung/Desktop/Memo/home/laravel/anphuong/resources/views/frontend/layouts/partials/header.blade.php ENDPATH**/ ?>