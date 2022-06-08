
<?php $__env->startSection('content'); ?>
    <h3 align = "center">Book List</h3>
    <br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <?php
            $i = 1;
        ?>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th><?php echo e($i++); ?></th>
                <td><a class="text-reset text-decoration-none" href='/HappyBookStore/Details/<?php echo e($book->id); ?>'><?php echo e($book->title); ?></a></td>
                <td><?php echo e($book->author); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <th colspan = "3">No Books Available</th>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('utslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/utscategories.blade.php ENDPATH**/ ?>