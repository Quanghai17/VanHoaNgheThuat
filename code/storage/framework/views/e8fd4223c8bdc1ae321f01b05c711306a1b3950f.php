<input <?php if($row->required == 1): ?> required <?php endif; ?> type="datetime" class="form-control datepicker" name="<?php echo e($row->field); ?>"
       value="<?php if(isset($dataTypeContent->{$row->field})): ?><?php echo e(\Carbon\Carbon::parse(old($row->field, $dataTypeContent->{$row->field}))->format('m/d/Y g:i A')); ?><?php else: ?><?php echo e(old($row->field)); ?><?php endif; ?>">
<?php /**PATH /home/tinhtoan/domains/vanhoanghethuatthainguyen.vn/public_html/vendor/tcg/voyager/src/../resources/views/formfields/timestamp.blade.php ENDPATH**/ ?>