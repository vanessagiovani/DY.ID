
<?php $__env->startSection('content'); ?>
<br>
<h3 align="center">New Products</h3>
<br>
<div class="container">
    <div class="row" style="justify-content:space-between">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 21rem; margin-bottom:2%">
            <img class="card-img-top" src="../storage/<?php echo e($product->photo); ?>" alt="Card image cap">
            <div class="card-body">
                <div style="justify-content:space-between; display:flex">
                    <b class="card-title"><?php echo e($product->name); ?></b>
                    <p class="card-title"><?php echo e($product->category); ?></p>
                </div>
                <p class="card-text">IDR. <?php echo e($product->price); ?></p>
                <a href="/DY.ID/admindetails<?php echo e($product->id); ?>" class="btn btn-primary text-black" style="background-color: #E8B200">More Details</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($products->links('pagination::bootstrap-4')); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/adminhome.blade.php ENDPATH**/ ?>