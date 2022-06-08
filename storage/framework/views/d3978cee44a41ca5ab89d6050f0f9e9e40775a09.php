
<?php $__env->startSection('content'); ?>
<div class="row" style="justify-content:center">
    <div class="col-sm-3 p-3 border" style="background-color: white; margin-top: 2%; margin-bottom: 2%">
        <h3 style="color: #004C99">Welcome Back</h3>
        <br>
        <form action="<?php echo e(route('users.loginProcess')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="field-group">
                <input class="form-control" name="email" type="email" placeholder="Email" value="<?php echo e(Cookie::get('email')); ?>" />
            </div>
            <br>
            <div class="field-group">
                <input class="form-control" name="password" type="password" placeholder="Password" value="<?php echo e(Cookie::get('password')); ?>" />

            </div>
            <br>
            <div class="field-group">
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <?php if($errors->any()): ?>
            <i class="text-danger text-center mt-3"><?php echo e($errors->first()); ?></i>
            <?php endif; ?>
            <div class="field-group" align="right">
                <div>
                    <button type="submit" name="login" class="btn btn-primary" style="background-color: #E8B200; color:black">Login</button>

                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/login.blade.php ENDPATH**/ ?>