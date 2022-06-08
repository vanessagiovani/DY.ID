
<?php $__env->startSection('content'); ?>
<br>
<h3>My Cart</h3>
<div class="row" style="justify-content:center;">
    <?php $__empty_1 = true; $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-sm-11 p-3 border d-flex" style="background-color: white; margin-top: 1%; margin-bottom: 1%">
        <div style="margin-right: 2%;"><img src="../storage/<?php echo e($cart_item->product->photo); ?>" alt="Image"></div>
        <div>
            <h5 style="display: inline;"><?php echo e($cart_item->product->name); ?></h5>
            <p style="display: inline;">(IDR. <?php echo e(number_format($cart_item->product->price)); ?>)</p>
            <br><br><br>
            <p>x<?php echo e($cart_item->quantity); ?> pcs</p>
            <p>IDR. <?php echo e(number_format($cart_item->subtotal)); ?></p>
            <div class="d-flex">
                <a href="<?php echo e(route('users.editCartItem', $cart_item)); ?>" class="btn btn-warning btn-sm text-black" style="margin-right: 5px;">Edit</a>
                <form action="<?php echo e(route('users.deleteCartItem', $cart_item)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    $totalprice += $cart_item->subtotal;
    $totalquantity += $cart_item->quantity;
    ?>
    <?php if($loop->last): ?>
    <form action="<?php echo e(route('users.checkout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="d-flex" style="justify-content: space-between;">
            <div>
                <h6 style="display: inline;">Total Price: </h6>
                <p style="display: inline;">IDR. <?php echo e(number_format($totalprice)); ?></p>
                <input type="hidden" id="totalprice" name="totalprice" value="<?php echo e($totalprice); ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning btn-sm text-black">Check Out (<?php echo e($totalquantity); ?>)</button>
            </div>
        </div>
    </form>

    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h6 align="center">Cart Empty..</h6>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/cart.blade.php ENDPATH**/ ?>