
<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-light">
    <h1 class="font-weight-bold p-3">Transaction History</h1>

    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container bg-white mb-5 mt-5 border border-primary">

        <p><?php echo e($transaction->created_at); ?></p>
        <?php $__currentLoopData = $transaction->cart_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container rounded p-2 mb-4 bg-white border border-grey">

            <div class="row">
                <div class="col-4">
                    <img class="rounded m-3" style="width: 350px; height: 350px" src="../storage/<?php echo e($cart_item->product->photo); ?>" alt="Card image cap">
                </div>

                <div class="col-5">
                    <h3 class="fw-bold mt-5"><?php echo e($cart_item->product->name); ?> <sup class="card-text fw-light">(IDR. <?php echo e(number_format($cart_item->product->price, 2)); ?>)</sup> </h3>
                    <br>
                    <p>x<?php echo e($cart_item->quantity); ?> pcs</p>
                    <br>
                    <h5 class="text-end">IDR. <?php echo e(number_format($cart_item->subtotal, 2)); ?></h5>
                    <br>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <p class="fw-bold text-end">Total Price: IDR. <?php echo e(number_format($cart_item->totalprice, 2)); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/transaction.blade.php ENDPATH**/ ?>