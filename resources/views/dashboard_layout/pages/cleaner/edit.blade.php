@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Add Cleaner </h3>
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
                                    <select class="form-control" name="sex" id="sex" value="{{ $cleaner->sex }}">
                                        <option value="Female" @if($cleaner->sex == "Female") selected @endif>Female</option>
                                        <option value="Male" @if($cleaner->sex == "Male") selected @endif>Male</option>
                                    </select>
                                </div>
                                <input type="file" class="image" name="image" value="{{$cleaner->image}}">
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
                                    <select class="form-control" name="role" id="role" value="{{$cleaner->role}}">
                                        <option value="Cleaner" @if($cleaner->role == "Cleaner") selected @endif>Cleaner</option>
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
