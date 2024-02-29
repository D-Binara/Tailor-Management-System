@extends('layouts.dashboard')
@section('dashboard')

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <!--? slider Area Start-->
    <div class="slider-area  position-relative " style="background-image: url('{{url('/images/tailor_shop_dark.jpg')}}'); background-size: cover;">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative slider-height  d-flex"
                 >

                {{--original--}}

                <div class="col-2"></div>
                <div class="col-md-8 " data-animation="fadeInLeft" data-delay=".4s" style="padding-top:120px ">
                    <div class="card">
                        <div class="card-header h1">Hi, {{Auth::user()->name}}!</div>

                        <div class="card-body">
                            <div class="row mt-5">
                                <div class="container card col-4 text-center shadow-lg">
                                    <div class="h2"> Total orders</div>
                                    <div class="h3"> 10</div>
                                </div>
                                <div class="container card col-4 text-center shadow-lg">
                                    <div class="h2">Pending orders</div>
                                    <div class="h3"> 10</div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="container card col-4 text-center shadow-lg">
                                    <div class="h2">Processing orders</div>
                                    <div class="h3"> 10</div>
                                </div>
                                <div class="container card col-4 text-center shadow-lg">
                                    <div class="h2">Finish orders</div>
                                    <div class="h3"> 10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>

            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/slick.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/main.js"></script>
@endsection


