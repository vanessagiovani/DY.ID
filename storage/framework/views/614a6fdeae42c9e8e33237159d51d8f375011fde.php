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
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Childrens')); ?>">Children's</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Comics')); ?>">Comics</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Drama')); ?>">Drama</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Fantasy')); ?>">Fantasy</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Horror')); ?>">Horror</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Mystery')); ?>">Mystery</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Romance')); ?>">Romance</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/ScienceFiction')); ?>">Science Fiction</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(url('/HappyBookStore/Thriller')); ?>">Thriller</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Contact')); ?>">Contact</a>
                </li>
            </ul>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-9 p-3 border">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <div class="col-sm-3 p-3 border">
                    <h3 align = "center">Category</h3>
                    <br>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/ActionandAdventure')); ?>">Action and Adventure</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Childrens')); ?>">Children's</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Comics')); ?>">Comics</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Drama')); ?>">Drama</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Fantasy')); ?>">Fantasy</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Horror')); ?>">Horror</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Mystery')); ?>">Mystery</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Romance')); ?>">Romance</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/ScienceFiction')); ?>">Science Fiction</a>
                    <a class="nav-link" href="<?php echo e(url('/HappyBookStore/Thriller')); ?>">Thriller</a>
                </div>
            </div>
        </div>
        <div class="container p-1 mt-5 bg-primary text-white text-center">
            <small>&copy Happy Book Store <?php echo date("Y"); ?> </small>
        </div>
        <script src="<?php echo asset('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\coba1\resources\views/utslayout.blade.php ENDPATH**/ ?>