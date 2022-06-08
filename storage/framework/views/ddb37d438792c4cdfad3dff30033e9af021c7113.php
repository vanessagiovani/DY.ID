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
        <div class="text-left d-flex">
            
            <a class="nav-link text-decoration-none text-reset" href="/DY.ID/home">Home</a>
            <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->role == 'admin'): ?>
            <a class="nav-link text-decoration-none text-reset dropdown-toggle" data-bs-toggle="dropdown" href="#">Manage Product</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('admin.viewProduct')); ?>">View Product</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('admin.addProduct')); ?>">Add Product</a></li>
            </ul>
            <a class="nav-link text-decoration-none text-reset dropdown-toggle" data-bs-toggle="dropdown" href="#">Manage Category</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('admin.viewCategory')); ?>">View Category</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('admin.addCategory')); ?>">Add Category</a></li>
            </ul>
            <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="text-right">
            <?php if(auth()->guard()->check()): ?>
            <a class="btn btn-primary" href="<?php echo e(route('users.logout')); ?>" role="button">Logout</a>
            <?php else: ?>
            <a class="btn btn-primary" href="/DY.ID/login" role="button">Login</a>
            <a class="btn btn-primary" href="/DY.ID/register" role="button">Register</a>
            <?php endif; ?>
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

</html>

<!-- <div class="container-fluid text-white" style="background-color: #004C99; margin-top: -2.6%; padding-bottom:0.5%; padding-top:0.5%; display:flex; justify-content:space-between;">
        <div>
            <?php if(auth()->guard()->check()): ?>
            <a class="nav-link text-decoration-none text-reset" href="/DY.ID/home">Home</a>
            <?php if(auth()->user()->role == 'admin'): ?>
            <a class="nav-link text-decoration-none text-reset dropdown-toggle" data-bs-toggle="dropdown" href="#">Manage Product</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/DY.ID/viewproduct">View Product</a></li>
                <li><a class="dropdown-item" href="/DY.ID/addproduct">Add Product</a></li>
            </ul>
            <a class="nav-link text-decoration-none text-reset dropdown-toggle" data-bs-toggle="dropdown" href="#">Manage Category</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/DY.ID/viewcategory">View Category</a></li>
                <li><a class="dropdown-item" href="/DY.ID/addcategory">Add Category</a></li>
            </ul> 
            <?php endif; ?>
            <?php endif; ?>
        </div>
        
        <div class="text-right">
            <?php if(auth()->guard()->check()): ?>
            <a class="btn btn-primary" href="" role="button">Logout</a>
            <?php else: ?>
            <a class="btn btn-primary" href="/DY.ID/login" role="button">Login</a>
            <a class="btn btn-primary" href="/DY.ID/register" role="button">Register</a>
            <?php endif; ?>
        </div>
    </div> --><?php /**PATH C:\xampp\htdocs\project\resources\views/adminlayout.blade.php ENDPATH**/ ?>