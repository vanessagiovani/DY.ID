
<?php $__env->startSection('content'); ?>
<div class="row" style="justify-content:center;">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-9 p-3 border d-flex" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <div style="margin-right: 2%;"><img src="../storage/<?php echo e($product->photo); ?>" style="width: 375px; height: px"></div>
        <div>
            <h5><?php echo e($product->name); ?></h5>
            <br>
            <h6>Category:</h6>
            <p><?php echo e($product->category); ?></p>
            <br>
            <h6>Price:</h6>
            <p><?php echo e($product->price); ?></p>
            <br>
            <h6>Description:</h6>
            <p><?php echo e($product->description); ?></p>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/admindetails.blade.php ENDPATH**/ ?>