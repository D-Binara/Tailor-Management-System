@extends('layouts.dashboard')
@extends('layouts.app')

@section('content')
@endsection
@section('dashboard')
    <div class="container-fluid" style="background-color: #EAE9E9">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header h1 ">Hi, {{Auth::user()->name}}!</div>

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
        </div>
    </div>
@endsection
