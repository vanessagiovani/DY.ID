
<?php $__env->startSection('content'); ?>
    <?php
        $i = 1;
        echo "<h3>WHILE</h3>";
    ?>
    <?php while($i < 10): ?>
        <?php echo e($i++); ?>

    <?php endwhile; ?>
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('LA02.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/LA02/while.blade.php ENDPATH**/ ?>