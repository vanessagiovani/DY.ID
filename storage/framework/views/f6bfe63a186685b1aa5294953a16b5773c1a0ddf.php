
<?php $__env->startSection('content'); ?>
<h5>Book Detail</h5>
<?php $__currentLoopData = $bookdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h6>Title:</h6>
<p><?php echo e($books->title); ?></p>
<br>
<h6>Author: </h6>
<p><?php echo e($books->author); ?></p>
<br>
<h6>Publisher: </h6>
<p><?php echo e($books->publisher); ?></p>
<br>
<h6>Year: </h6>
<p><?php echo e($books->year); ?></p>
<br>
<h6>Description: </h6>
<p><?php echo e($books->description); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts\resources\views/detailspage.blade.php ENDPATH**/ ?>