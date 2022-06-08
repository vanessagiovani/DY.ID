
<?php $__env->startSection('content'); ?>
        <?php $__empty_1 = true; $__currentLoopData = $nilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
           <?php if(($val['score'] >= 0) and ($val['score'] < 50)): ?>
            <div class="alert alert-danger d-inline-block">
             <p>Name  : <?php echo e($val['name']); ?></p>
             <p>Score : <?php echo e($val['score']); ?></p>
            </div>
           <?php elseif(($val['score'] >= 50) and ($val['score'] <= 100)): ?>
            <div class="alert alert-success d-inline-block">
             <p>Name  : <?php echo e($val['name']); ?></p>
             <p>Score : <?php echo e($val['score']); ?></p>
            </div>
           <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
         <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
        <?php endif; ?>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('LA02.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/LA02/forelse.blade.php ENDPATH**/ ?>