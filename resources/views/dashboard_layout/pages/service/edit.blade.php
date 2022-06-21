@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Create Service </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><form method="POST" action="{{ route('service.update',$service->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Form Add</li>
                    </ol>
                </nav>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create Service</h4>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$service->name}}" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Title</label>
                                    <input type="text" class="form-control" value="{{$service->title}}" name="title" id="title" placeholder="Title"></input>
                                </div>


                                <input type="hidden" class="image" name="image" value="value="{{$service->image}}"">
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file"  class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                                        <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Price</label>
                                    <input type="text" class="form-control" value="{{$service->price}}" name="price" id="price" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label for="text">Time Line</label>
                                    <input type="text" class="form-control" class="form-control" value="{{$service->time_line}}" name="time_line" id="time_line" required placeholder="time_line">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        @include('dashboard_layout.partials._footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

@endsection
