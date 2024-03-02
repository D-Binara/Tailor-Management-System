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

                {{--form start--}}
                <div class="col-12" data-animation="fadeInLeft" data-delay=".4s">
                    <div class="col-sm-8" style="margin-top: 45px;margin-left: auto; margin-right: auto;">
                        <div class="card">
                            <div class="card-body ">
                                <form class="form-sample" method="post" action="{{route('request_order')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <h3 class="text-center">Request Your New Order</h3>
                                    <div class="form-group">
                                        <label>Order Type :-</label>
                                        <select name="product_id" id="product_id">
                                            @foreach($products as $product)
                                                <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>height :-</label>
                                        <label style="display: block">
                                            <input type="text" placeholder="height" name="height" id="height"
                                                   class="form-control">
                                        </label><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Width :-</label>
                                        <label style="display: block">
                                            <input type="text" placeholder="Width" name="Width"
                                                   id="phone_number" class="form-control">
                                        </label><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Colour :-</label>
                                        <label style="display: block">
                                            <input type="text" placeholder="Colour" name="Colour"
                                                   id="Colour" class="form-control">
                                        </label><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity :-</label>
                                        <label style="display: block">
                                            <input type="text" placeholder="Quantity" name="Quantity" id="Quantity"
                                                   class="form-control">
                                        </label><br>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

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


