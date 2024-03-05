<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.css">

    <!--logout Scripts-->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .nav-item.active {
            background-color: #8105D8; /* Set the background color for the active item */
            color: #fff; /* Set the text color for the active item */
        }

        .full-page-container {
            background-image: url('{{url('/images/tailor_shop_dark.jpg')}}');
            background-size: cover;
            /* Set the height to cover the entire viewport */
        }
    </style>


</head>
<body class="hold-transition sidebar-mini">


{{--nav bar--}}
<div id="app" style=" background-color: #8105D8">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
        <div class="container-fluid">
            <a class="h3 fw-bolder " style="color: #3B064D; text-decoration: none;" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2" style="width: 400px;"> <!-- Set the width as per your preference -->
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>



                <!--User logout-->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>
{{--nav bar end--}}


<div class="wrapper" style="background-color: #8105D8">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 shadow-sm navbar-light" >

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-5">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Home Link -->
                    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{\URL::to('/home')}}" class="nav-link" style="color: #000000;">
                            <!-- Change color here -->
                            <i class="nav-icon fas fa-home" style="color: #000000;"></i> <!-- Change color here -->
                            <p>Home</p>
                        </a>
                    </li>

                    <!-- product Link -->
                    <li class="nav-item {{ Request::is('getProductToProduct') ? 'active' : '' }}">
                        <a href="{{\URL::to('/getProductToProduct')}}" class="nav-link" style="color: #000000;">
                            <!-- Change color here -->
                            <i class="nav-icon fas fa-user-graduate" style="color: #000000;"></i>
                            <!-- Change color here -->
                            <p>product</p>
                        </a>
                    </li>

                    <!-- My Orders Link -->
                    <li class="nav-item {{ Request::is('getOrder') ? 'active' : '' }}">
                        <a href="{{\URL::to('/getOrder')}}" class="nav-link" style="color: #000000;">
                            <!-- Change color here -->
                            <i class="nav-icon fas fa-tachometer-alt" style="color: #000000;"></i>
                            <!-- Change color here -->
                            <p>My Orders</p>
                        </a>
                    </li>

                    <!-- New Order Link -->
                    <li class="nav-item {{ Request::is('getProduct') ? 'active' : '' }}">
                        <a href="{{\URL::to('/getProduct')}}" class="nav-link" style="color: #000000;">
                            <!-- Change color here -->
                            <i class="nav-icon fas fa-calendar" style="color: #000000;"></i> <!-- Change color here -->
                            <p>New Order</p>
                        </a>
                    </li>

                    <!-- Profile Link -->
                    <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
                        <a href="{{\URL::to('/profile')}}" class="nav-link" style="color: #000000;">
                            <!-- Change color here -->
                            <i class="nav-icon fas fa-user-graduate" style="color: #000000;"></i>
                            <!-- Change color here -->
                            <p>Profile</p>
                        </a>
                    </li>


                </ul>
            </nav>


            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #8105D8;">
        @yield('dashboard')
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.js"></script>


</body>
</html>
