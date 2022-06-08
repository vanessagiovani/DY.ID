<!DOCTYPE html>
<html lang="en">

<head>
    <title>DY.ID</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo asset('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

</head>

<body>

    <div class="container-fluid p-1" style="background-color: #E8B200; margin-bottom: 2rem; display:flex; justify-content:space-between">
        <div class="d-flex">
            <img style="width: 35px; height: 35px" src="../storage/logo.png">
            <h3><b>DY.ID</b></h3>
        </div>
        <form action="/search" method="GET">
            <div class="form-group row">
                <div class="container d-flex">
                    <input type="search" class="form-control" name="query_param" placeholder="Search product...">
                    <i class="bi bi-search" type="submit"></i>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid text-white" style="background-color: #004C99; margin-top: -2.6%; padding-bottom:0.5%; padding-top:0.5%; display:flex; justify-content:space-between;">
        <div class="text-left"><a class="nav-link text-decoration-none text-reset" href="/DY.ID/home">Home</a></div>
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
        <div class="text-right">
            <a class="btn btn-primary" href="/DY.ID/login" role="button">Login</a>
            <a class="btn btn-primary" href="/DY.ID/register" role="button">Register</a>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #B8DDE6; padding-bottom:3%; margin-bottom:-4%">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="container-fluid p-1 mt-5 text-white text-center" style="background-color: #004C99;">
        <div class="icons">
            <i style="margin-right: 2.5%" class="bi bi-facebook"></i>
            <i style="margin-right: 2.5%" class="bi bi-instagram"></i>
            <i class="bi bi-question-circle-fill"></i>
        </div>
        <div style="margin-top: 1%"><small>&copy <?php echo date("Y"); ?> Copyright DY20-1</small></div>
    </div>
    <script src="<?php echo asset('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\project\resources\views/layoutadmin.blade.php ENDPATH**/ ?>