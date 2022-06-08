
<?php $__env->startSection('content'); ?>
    <h3 align = "center">Book List</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><?php echo e($i++); ?></th>
                <td><a class="text-decoration-none text-reset" href='/HappyBookStore/Details/<?php echo e($book->id); ?>'><?php echo e($book->title); ?></a></td>
                <td><?php echo e($book->author); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>                       
<?php echo $__env->make('utslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba1\resources\views/utshome.blade.php ENDPATH**/ ?>