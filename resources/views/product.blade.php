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
                    <img src="/images/tailor_shop_dark.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->

    <!--? slider Area Start-->
    <div class="slider-area  position-relative full-page-container"
         style="background-image: url('{{url('/images/tailor_shop_dark.jpg')}}'); background-size: cover;">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative slider-height  d-flex">

                {{--animation--}}
                <div class="col-12" data-animation="fadeInLeft" data-delay=".4s">

                    {{--card--}}
                    <div class="row container-fluid" style="margin-top: 10px">
                        @foreach($product as $variable)
                            {{-- Subject cards --}}
                            <div class="card-gray col-4">
                                <div class="card">
                                    <div class="card-header">
                                        {{$variable->name}}
                                    </div>
                                    <div class=" card-img">
                                        <img src="{{ asset($variable->image) }}" height="100" class="card-img"
                                             alt=" {{$variable->name}}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--card end--}}
                </div>
                {{--animation end--}}
            </div>
        </div>
    </div>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/slick.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/main.js"></script>

@endsection
