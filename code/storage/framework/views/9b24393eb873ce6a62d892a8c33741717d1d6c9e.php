<?php
    $pageCount = 3;
?>

<?php if($paginator->hasPages()): ?>
    <!-- Pagination -->
    <div>
        <div class="paging">
            <!-- Pagination -->
            <ul class="pagination">
                <?php if(!$paginator->onFirstPage()): ?>
                    <li><a href="<?php echo e($paginator->previousPageUrl()); ?>">«</a></li>
                <?php endif; ?>

                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $dotleft = false;
                                $dotright = false;
                            ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="active">
                                    <a href="#"><?php echo e($page); ?></a>
                                </li>
                            <?php elseif($page <= $pageCount ||
                                abs($paginator->currentPage() - $page) <= $pageCount ||
                                $page > $paginator->lastPage() - $pageCount): ?>
                                <li>
                                    <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                                </li>
                            <?php elseif($page > $pageCount && $page < $paginator->currentPage() && $dotleft == false): ?>
                                <?php
                                    $dotleft = true;
                                ?>
                                <li>
                                    <a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                            <path
                                                d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            <?php elseif($page <= $paginator->lastPage() - $pageCount && $page > $paginator->currentPage() && $dotright == false): ?>
                                <?php
                                    $dotright = true;
                                ?>
                                <li>
                                    <a>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                            <path
                                                d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li><a href="<?php echo e($paginator->nextPageUrl()); ?>">»</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/tinhtoan/domains/tinhtoan.kennatech.vn/public_html/resources/views/frontend/layouts/partials/paginate.blade.php ENDPATH**/ ?>