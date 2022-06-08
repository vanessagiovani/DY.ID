
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $bookcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h5><?php echo e($category->category); ?> List</h5>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<table style = 'border: 1px solid black' class='table'>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $bookcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td>
                <a href='/uts/<?php echo e($books->id); ?>'><?php echo e($books->title); ?></a>
            </td>
            <td><?php echo e($books->author); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <th colspan='3'>No Data..</th>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts\resources\views/categoriespage.blade.php ENDPATH**/ ?>