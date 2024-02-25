{{--
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
    <div class="slider-area  position-relative ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative hero-overly slider-height  d-flex"
                 data-background="assets/img/hero/h1_hero.png">

                --}}
{{--original--}}{{--

                <div class="col-2"></div>
                <div class="col-md-8 " data-animation="fadeInLeft" data-delay=".4s" style="padding-top:120px ">
                    <div class="card ">
                        <div class="card-header h1 ">Hi, {{Auth::user()->name}}!</div>

                        <div class="card-body">
                            <div class="row mt-5" >
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


                --}}
{{--copy--}}{{--

               --}}
{{-- <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero-caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s">We make cloths that suit you</h1>
                                <p data-animation="fadeInLeft" data-delay=".6s">TLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.
                                    Suspendisse varius enim in eros elementum tristique. Duis
                                    cursus, mi quis viverra ornare.</p>
                                <!-- Hero Btn -->
                                <a href="#" class="btn" data-animation="fadeInLeft" data-delay=".8s">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left img -->
                <div class="hero-img">
                    <img src="assets/img/hero/h1_hero1.png" alt="" data-animation="fadeInRight"
                         data-transition-duration="5s">
                </div>--}}{{--

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
--}}
