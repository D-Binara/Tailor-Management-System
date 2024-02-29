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
            <div class="single-slider position-relative hero-overly slider-height  d-flex">


            {{--form start--}}
                <div class="col-sm-8" style="margin-top: 45px;margin-left: auto; margin-right: auto;">
                    <div class="card" >
                        <div class="card-body ">
                            <form class="form-sample" method="post" action="{{route('request_order')}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h3 class="text-center">Edit Your Profile</h3>
                                <div class="form-group">
                                    <label>User Name :-</label>
                                    <label style="display: block" >
                                        <input type="text" placeholder="User Name" name="user_name" id="user_name" class="form-control">
                                    </label><br>
                                </div>
                                <div class="form-group">
                                    <label>Profile Picture:-</label>
                                    <label style="display: block" >
                                        <input type="file" placeholder="Profile Picture" name="profile_picture" id="profile_picture" class="form-control">
                                    </label><br>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number :-</label>
                                    <label style="display: block" >
                                        <input type="text" placeholder="Phone Number" name="phone_number" id="phone_number" class="form-control">
                                    </label><br>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number:-</label>
                                    <label style="display: block" >
                                        <input type="text" placeholder="Mobile Number" name="mobile_number" id="mobile_number" class="form-control">
                                    </label><br>
                                </div>
                                <div class="form-group">
                                    <label>Address:-</label>
                                    <label style="display: block" >
                                        <input type="text" placeholder="Address" name="address" id="address" class="form-control">
                                    </label><br>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </form>
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
