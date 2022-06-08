
<?php $__env->startSection('content'); ?>
<br>
<h3>Manage Category</h3>
<br>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th style="width: 3%">No</th>
            <th>Category Name</th>
            <th style="width: 12%">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($category->name); ?></td>
            <td>
                <div class="d-flex justify-content-around">
                    <a href="<?php echo e(route('admin.editCategory', $category)); ?>" class="btn btn-warning btn-sm text-black">Update</a>
                    <form action="<?php echo e(route('admin.deleteCategory', $category)); ?>" method="POST">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <td colspan="3" class="text-center">No Data</td>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/viewcategory.blade.php ENDPATH**/ ?>