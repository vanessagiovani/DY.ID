<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel 8</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid p-5 bg-primary text-white text-center">
            <h1>HAPPY BOOK STORE</h1>
        </div>
        <div class="container">
            <ul class="nav  justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore')); ?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/ActionandAdventure')); ?>">Action and Adventure</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/elseif')); ?>">Children's</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Comics</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Drama</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Fantasy</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Horror</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Mystery</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Romance</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Science Fiction</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Thriller</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/LA02/continueandbreak')); ?>">Contact</a>
                </li>
            </ul>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-2"></div>
                <div align = "center" class="col-sm-8 p-3 border">
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
                                <td><?php echo e($book->title); ?></td>
                                <td><?php echo e($book->author); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <th colspan = "3">No Books Available</th>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="container p-1 mt-5 bg-primary text-white text-center">
            <small>&copy Binus University <?php echo date("Y"); ?> </small>
        </div>
        <script src="<?php echo asset('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>
</html>

<!-- <tr>
                <td colspan = "2" style = "border: 1px solid black">Content 4</td>
            </tr> --><?php /**PATH C:\xampp\htdocs\coba1\resources\views/utsactionandadventure.blade.php ENDPATH**/ ?>