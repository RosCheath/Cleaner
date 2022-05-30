@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Add Users </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">

                            <form method="POST" action="{{ route('cleaner.update',$cleaner->id)}}" enctype="multipart/form-data">
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
                            <h4 class="card-title">Create Users</h4>
                            <p class="card-description"> Create Users </p>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control " name="name" value="{{$cleaner->name}}" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control " name="email" value="{{$cleaner->email}}" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">date</label>
                                    <input type="date" class="form-control" name="date_of_birth" value="{{$cleaner->date_of_birth}}" id="date_of_birth" placeholder="Date of Birth">

                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" name="sex" id="sex" value="{{ Auth::user()->sex }}">
                                        <option value="Male" @if(Auth::user()->sex == "Male") selected @endif>Male</option>
                                        <option value="Female" @if(Auth::user()->sex == "Female") selected @endif>Female</option>
                                    </select>
                                </div>
                                <input type="hidden" class="image" name="image" value="https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419">
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
                                    <label for="exampleInputCity1">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{$cleaner->phone}}" id="phone" placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputCity1">ID Cars</label>
                                    <input type="text" class="form-control" name="id_card" value="{{$cleaner->id_card}}" id="id_card" placeholder="ID Card">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Role</label>
                                    <select class="form-control" name="role" id="role" value="{{Auth::user()->role}}">
                                        <option value="Cleaner" @if(Auth::user()->role == "Cleaner") selected @endif>Cleaner</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <button class="btn btn-dark">Cancel</button>
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
