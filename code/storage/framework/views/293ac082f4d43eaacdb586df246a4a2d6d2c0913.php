<?php
    $documents = \App\Notification::latest()
        ->limit(20)
        ->get();
?>

<style>
    .list-document {
        list-style: disc;
        padding-left: 1.5rem;
        height: 300px;
        overflow: hidden;
    }

    .list-document li {
        margin-bottom: .5rem;
    }
</style>

<div class="widget color-default">
    <h3 class="block-title"><span>Thông báo</span></h3>

    <div class="list-post-block list-document-block">
        <ul class="list-document marquee-vert">
            <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="clearfix">
                    <a href="<?php echo e(route('documents.show', $document->slug)); ?>"><?php echo e($document->title); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<script>
    window.addEventListener("load", (event) => {
        jQuery(document).ready(function($) {
            $('.marquee-vert').marquee({
                duration: 15000,
                gap: 13,
                delayBeforeStart: 0,
                direction: 'up',
                duplicated: true,
                startVisible: true
            });
        });
    });
</script>
<?php /**PATH /home/tinhtoan/domains/tinhtoan.kennatech.vn/public_html/resources/views/frontend/layouts/partials/notification.blade.php ENDPATH**/ ?>