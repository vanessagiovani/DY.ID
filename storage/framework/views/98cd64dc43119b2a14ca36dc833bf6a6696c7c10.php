
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
            <p>IDR. <?php echo e(number_format($product->price)); ?></p>
            <br>
            <h6>Description:</h6>
            <p><?php echo e($product->description); ?></p>
            <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->role == 'admin'): ?>
            <?php endif; ?>
            <?php if(auth()->user()->role == 'member'): ?>
            <form action="<?php echo e(route('users.storeCartItem', $product)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="d-flex">
                    <div class="form-group" style="margin-right: 5px;">
                        <label for="quantity">Qty: </label>
                        <input type="text" class="field-control <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="quantity" name="quantity" value="<?php echo e(old('quantity')); ?>">
                        <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-sm text-black">Add To Cart</button>
                    </div>
                </div>
            </form>
            <?php endif; ?>
            <?php else: ?>
            <a href="/DY.ID/login" class="btn btn-primary text-black" style="background-color: #E8B200">Login to buy</a>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/details.blade.php ENDPATH**/ ?>