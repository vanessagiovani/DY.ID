
<?php $__env->startSection('content'); ?>
    <?php
        $nilai = array("1", "2", "3", "4");
        echo "<h3>CONTINUE & BREAK</h3>";
    ?>
    <?php $__currentLoopData = $nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($val == 2 or $val == 4): ?>
            <?php continue; ?>
        <?php endif; ?>
        <?php echo e($val); ?>

        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('LA02.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/LA02/continueandbreak.blade.php ENDPATH**/ ?>