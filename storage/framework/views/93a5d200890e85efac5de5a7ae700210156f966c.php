<!DOCTYPE html>
<html lang="en">

<head>
    <title>Uts</title>
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
                <a class="nav-link" href="/uts/home">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/uts/category1">Autobiography</a></li>
                    <li><a class="dropdown-item" href="/uts/category2">Classic</a></li>
                    <li><a class="dropdown-item" href="/uts/category3">Drama</a></li>
                    <li><a class="dropdown-item" href="/uts/category4">Fantasy</a></li>
                    <li><a class="dropdown-item" href="/uts/category5">Graphic novel</a></li>
                    <li><a class="dropdown-item" href="/uts/category6">Horror</a></li>
                    <li><a class="dropdown-item" href="/uts/category7">Mystery</a></li>
                    <li><a class="dropdown-item" href="/uts/category8">Romance</a></li>
                    <li><a class="dropdown-item" href="/uts/category9">Suspense</a></li>
                    <li><a class="dropdown-item" href="/uts/category10">Young adult</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/uts/contact">Contact</a>
            </li>
        </ul>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 p-3 border"><?php echo $__env->yieldContent('content'); ?></div>
            <div class="col-sm-2">
                <h3>Category</h3>
                <a href="/uts/category1">Autobiography</a>
                <br>
                <a href="/uts/category2">Classic</a>
                <br>
                <a href="/uts/category3">Drama</a>
                <br>
                <a href="/uts/category4">Fantasy</a>
                <br>
                <a href="/uts/category5">Graphic novel</a>
                <br>
                <a href="/uts/category6">Horror</a>
                <br>
                <a href="/uts/category7">Mystery</a>
                <br>
                <a href="/uts/category8">Romance</a>
                <br>
                <a href="/uts/category9">Suspense</a>
                <br>
                <a href="/uts/category10">Young adult</a>
                <br>
            </div>
        </div>
        <div class="container p-1 mt-5 bg-primary text-white text-center">
            <small>&copy Happy Book Store <?php echo date("Y"); ?> </small>
        </div>
        <script src="<?php echo asset('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\uts\resources\views/layoutpage.blade.php ENDPATH**/ ?>