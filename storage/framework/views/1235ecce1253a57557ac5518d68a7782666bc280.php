
<?php $__env->startSection('content'); ?>
    <?php
        echo "<h3>FOR</h3>";
    ?>
    <?php for($i = 1; $i <= 9; $i++): ?>
        <?php echo e($i); ?>

        <br>
    <?php endfor; ?>
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('LA02.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/LA02/for.blade.php ENDPATH**/ ?>