@extends('admin.admin_dashboard')
@section('dashboard')

    {{--form start--}}
    <div class="col-12" data-animation="fadeInLeft" data-delay=".4s">
        <div class="col-sm-8" style="margin-top: 45px;margin-left: auto; margin-right: auto;">
            <div class="card">
                <div class="card-body ">
                    <!-- Add this at the top of your form to display validation errors -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Add this where you want to display success or error message -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form class="form-sample" method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description:</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Product Price:</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Product Image:</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   accept="image/jpeg, image/png, image/jpg, image/gif">
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
