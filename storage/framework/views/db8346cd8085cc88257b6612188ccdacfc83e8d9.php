
<?php $__env->startSection('content'); ?>
<br>
<h3>My History Transaction</h3>
<div class="row" style="justify-content:center;">
    <?php $__empty_1 = true; $__currentLoopData = $historytransaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-sm-11 p-3 border" style="background-color: white; margin-top: 1%">
        <p><?php echo e($transaction->created_at); ?></p>
    </div>
    <?php $__currentLoopData = $transaction->cart->cartitem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-11 p-3 border d-flex" style="background-color: white">
        <div style="margin-right: 2%;"><img src="../storage/<?php echo e($cart_item->product->photo); ?>" alt="Image"></div>
        <div>
            <h5 style="display: inline;"><?php echo e($cart_item->product->name); ?></h5>
            <p style="display: inline;">(IDR. <?php echo e(number_format($cart_item->product->price)); ?>)</p>
            <br><br><br>
            <p>x<?php echo e($cart_item->quantity); ?> pcs</p>
            <p>IDR. <?php echo e(number_format($cart_item->subtotal)); ?></p>
        </div>
    </div>
    <?php if($loop->last): ?>
    <div class="col-sm-11 p-3 border" style="background-color: white; margin-bottom: 1%">
        <h6 align="right">Total Price: IDR. <?php echo e(number_format($transaction->totalprice)); ?></h6>
    </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h6 align="center">History Empty..</h6>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/historytransaction.blade.php ENDPATH**/ ?>