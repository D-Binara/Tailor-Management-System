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
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative slider-height  d-flex">

                {{--Animation--}}
                <div class="col-12" data-animation="fadeInLeft" data-delay=".4s">
                    
                    <div class="row">
                        <div class="col-2"></div>
                        {{--orders table--}}
                        <div class="col-8" >
                            <table class="table table-hover mt-5">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">order_type</th>
                                    <th scope="col">color</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $orders)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{$orders->order_type}}</td>
                                        <td>{{$orders->color}}</td>
                                        <td>{{$orders->quantity}}</td>
                                        <td>{{$orders->status}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{--orders table end--}}
                        <div class="col-2"></div>
                    </div>
                </div>
                {{--Animation end--}}
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
