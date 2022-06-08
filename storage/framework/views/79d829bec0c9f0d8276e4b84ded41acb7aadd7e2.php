
<?php $__env->startSection('content'); ?>
<h5>Book List</h5>
<table style = 'border: 1px solid black' class='table'>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $bookcollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <a href='/uts/<?php echo e($books->id); ?>'><?php echo e($books->title); ?></a>
            </td>
            <td><?php echo e($books->author); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts\resources\views/homepage.blade.php ENDPATH**/ ?>