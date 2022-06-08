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
    <h1>LARAVEL 8</h1>
  </div>
  <div class="container">
    <ul class="nav  justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/LA02/home')); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/LA02/display')); ?>">Display Data</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Selection</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo e(url('/LA02/if')); ?>">If</a></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/LA02/elseif')); ?>">If Else</a></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/LA02/switch')); ?>">Switch</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Loop</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo e(url('/LA02/for')); ?>">For</a></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/LA02/while')); ?>">While</a></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/LA02/foreach')); ?>">Foreach</a></li>
          <li><a class="dropdown-item" href="<?php echo e(url('/LA02/forelse')); ?>">Forelse</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/LA02/continueandbreak')); ?>">Continue & Break</a>
      </li>
    </ul>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div align = "center" class="col-sm-8 p-3 border">
        <h3>Welcome To Laravel 8</h3>
        <p>I see that you are back, Jarell ;)</p>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
  </div>
  <div class="container p-1 mt-5 bg-primary text-white text-center">
    <small>&copy Binus University <?php echo date("Y"); ?> </small>
  </div>
  <script src="<?php echo asset('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\coba1\resources\views/LA02/home.blade.php ENDPATH**/ ?>