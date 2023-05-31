<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="container container-bg">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo e(asset('/')); ?>">Trang chủ</a></li>
                        <li><?php echo e($title); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="block-wrapper section-bg">
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <h3><?php echo e($title); ?></h3>

                    <div class="widget contact-info">

                        <div class="contact-info-box">
                            <div class="contact-info-box-content">
                                <h4>Địa chỉ</h4>
                                <p><?php echo e(setting('site.address')); ?></p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="contact-info-box-content">
                                <h4>Email</h4>
                                <p><a href="mailto:<?php echo e(setting('site.email')); ?>"><?php echo e(setting('site.email')); ?></a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="contact-info-box-content">
                                <h4>Số điện thoại</h4>
                                <p><?php echo e(setting('site.phone')); ?></p>
                            </div>
                        </div>

                    </div><!-- Widget end -->

                    <div style="margin-top: 1rem"></div>
                    <h3>Thông tin liên hệ</h3>
                    <form action="<?php echo e(route('feedback')); ?>"
                        method="post" role="form">
                        <?php echo csrf_field(); ?>
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control form-control-name" name="name" id="name"
                                        placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input class="form-control form-control-email" name="phone" id="phone"
                                        placeholder="" type="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control form-control-email" name="email" id="email"
                                        placeholder="" type="email" required>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control form-control-message" name="content" id="message" placeholder="" rows="10"
                                required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Gửi liên hệ</button>
                        </div>
                    </form>



                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tinhtoan/domains/vanhoanghethuatthainguyen.vn/public_html/resources/views/frontend/contact/index.blade.php ENDPATH**/ ?>