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
        <form action="{{route('users.search')}}" method="GET">
            <div class="form-group row">
                <div class="container d-flex">
                    <input type="text" class="form-control" name="query_param" placeholder="Search product...">
                    <button class="btn btn-primary-outline" type="submit">
                        <i class="bi-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid text-white" style="background-color: #004C99; margin-top: -2.6%; padding-bottom:0.5%; padding-top:0.5%; display:flex; justify-content:space-between;">
        <div class="text-left d-flex">
            <a class="nav-link text-decoration-none text-reset" href="/DY.ID/home">Home</a>
            @auth()
            @if(auth()->user()->role == 'admin')
            <a class="nav-link text-decoration-none text-reset dropdown-toggle" data-bs-toggle="dropdown" href="#">Manage Product</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.viewProduct')}}">View Product</a></li>
                <li><a class="dropdown-item" href="{{route('admin.addProduct')}}">Add Product</a></li>
            </ul>
            <a class="nav-link text-decoration-none text-reset dropdown-toggle" data-bs-toggle="dropdown" href="#">Manage Category</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.viewCategory')}}">View Category</a></li>
                <li><a class="dropdown-item" href="{{route('admin.addCategory')}}">Add Category</a></li>
            </ul>
            @endif
            @if(auth()->user()->role == 'member')
            <a class="nav-link text-decoration-none text-reset" href="{{route('users.cart')}}">My Cart</a>
            <a class="nav-link text-decoration-none text-reset" href="{{route('users.historyTransaction')}}">History Transaction</a>
            @endif
            @endauth 
        </div>
        <div class="text-right">
            @auth
            <a class="btn btn-primary" href="{{route('users.logout')}}" role="button">Logout</a>
            @else
            <a class="btn btn-primary" href="/DY.ID/login" role="button">Login</a>
            <a class="btn btn-primary" href="/DY.ID/register" role="button">Register</a>
            @endauth
        </div>
    </div>
    <div class="container-fluid" style="background-color: #B8DDE6; padding-bottom:3%; margin-bottom:-4%">
        @yield('content')
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