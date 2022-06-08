
<?php $__env->startSection('content'); ?>
    <h3 align = "center">Book Detail</h3>
    <br>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h6 style="display: inline;">Title: </h6>
        <p style="display: inline;"><?php echo e($book->title); ?></p>
        <br><br>
        <h6 style="display: inline;">Author: </h6>
        <p style="display: inline;"><?php echo e($book->author); ?></p>
        <br><br>
        <h6 style="display: inline;">Publisher: </h6>
        <p style="display: inline;"><?php echo e($book->publisher); ?></p>
        <br><br>
        <h6 style="display: inline;">Year: </h6>
        <p style="display: inline;"><?php echo e($book->year); ?></p>
        <br><br>
        <h6 style="display: inline;">Description: </h6>
        <p><?php echo e($book->description); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('utslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/utsdetails.blade.php ENDPATH**/ ?>