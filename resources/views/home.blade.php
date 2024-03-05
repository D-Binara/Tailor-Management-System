@extends('layouts.dashboard')
@section('dashboard')
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

@endsection


