@extends('layouts.dashboard')
@section('dashboard')

    <!-- CSS here -->
{{--    <link rel="stylesheet" href="assets/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="assets/css/animate.min.css">
{{--    <link rel="stylesheet" href="assets/css/animated-headline.css">--}}
{{--    <link rel="stylesheet" href="assets/css/slick.css">--}}
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
    <div class="slider-area  position-relative full-page-container"
         style="background-image: url('{{url('/images/tailor_shop_dark.jpg')}}'); background-size: cover;">
        <div class="slider-active" >
            <!-- Single Slider -->
            <div class="single-slider position-relative slider-height  d-flex">

                {{--original--}}

                <div class="col-2"></div>
                <div class="col-8" data-animation="fadeInLeft" data-delay=".4s" style="padding-top: 120px">
                    <div class="card" style="border-radius: 20px;">
                        <div class="card-header h1">Hi, {{Auth::user()->name}}!</div>

                        <div class="card-body">
                            <div class="row mt-5">
                                <div class="container card col-4  shadow-lg" style="border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 d-flex align-items-center text-right">
                                            <i class="fas fa-shopping-cart fa-2x" style="color: #7ECFF9"></i></div>
                                        <div class="col-10 ">
                                            <div class="h3"> Total Orders</div>
                                            <div class="h1">10</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container card col-4  shadow-lg" style="border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 d-flex align-items-center text-right">
                                            <i class="fas fa-hourglass-half fa-2x" style="color: #FF6464"></i></div>
                                        <div class="col-10">
                                            <div class="h3"> Pending Orders</div>
                                            <div class="h1">10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="container card col-4  shadow-lg" style="border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 d-flex align-items-center  text-right">
                                            <i class="fas fa-sync-alt fa-2x" style="color: #F1C338"></i></div>
                                        <div class="col-10">
                                            <div class="h3">Processing Orders</div>
                                            <div class="h1">10</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container card col-4  shadow-lg" style="border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 d-flex align-items-center text-right">
                                            <i class="fas fa-check-circle fa-2x" style="color: #27DE88"></i></div>
                                        <div class="col-10">
                                            <div class="h3"> Finished Orders</div>
                                            <div class="h1">10</div>
                                        </div>
                                    </div>
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


