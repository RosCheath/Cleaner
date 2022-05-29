@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Add Users </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><form method="POST" action="{{ route('users.store') }}">
                            @csrf</li>
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
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">date</label>
                                    <input type="date" class="form-control" @error('date_of_birth') is-invalid @enderror name="date_of_birth" id="date_of_birth" placeholder="Date of Birth">
                                    @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Gender</label>
                                    <select class="form-control" name="sex" id="sex">
                                        <option>Male</option>
                                        <option>Female</option>
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
                                    <input type="text" class="form-control" @error('phone') is-invalid @enderror name="phone" id="phone" placeholder="Phone Number">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Role</label>
                                    <select class="form-control" name="role" id="role">
                                        <option value="User" @if(Auth::user()->role == "User") selected @endif>user</option>
                                        <option value="Admin" @if(Auth::user()->role == "Admin") selected @endif>admin</option>
                                        <option value="Cleaner" @if(Auth::user()->role == "Cleaner") selected @endif>Cleaner</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password" placeholder="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Confirm password">Confirm Password </label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{--        <div class="col-12 grid-margin">--}}
                {{--          <div class="card">--}}
                {{--            <div class="card-body">--}}
                {{--              <h4 class="card-title">User Personal info</h4>--}}
                {{--              <form class="form-sample">--}}
                {{--                <p class="card-description"> Personal info </p>--}}
                {{--                <div class="row">--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">First Name</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input type="text" class="form-control" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Last Name</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input type="text" class="form-control" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
                {{--                <div class="row">--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Gender</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <select class="form-control">--}}
                {{--                          <option>Male</option>--}}
                {{--                          <option>Female</option>--}}
                {{--                        </select>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Date of Birth</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input class="form-control" placeholder="dd/mm/yyyy" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
                {{--                <div class="row">--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Category</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <select class="form-control">--}}
                {{--                          <option>Category1</option>--}}
                {{--                          <option>Category2</option>--}}
                {{--                          <option>Category3</option>--}}
                {{--                          <option>Category4</option>--}}
                {{--                        </select>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Membership</label>--}}
                {{--                      <div class="col-sm-4">--}}
                {{--                        <div class="form-check">--}}
                {{--                          <label class="form-check-label">--}}
                {{--                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>--}}
                {{--                        </div>--}}
                {{--                      </div>--}}
                {{--                      <div class="col-sm-5">--}}
                {{--                        <div class="form-check">--}}
                {{--                          <label class="form-check-label">--}}
                {{--                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>--}}
                {{--                        </div>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
                {{--                <p class="card-description"> Address </p>--}}
                {{--                <div class="row">--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Address 1</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input type="text" class="form-control" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">State</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input type="text" class="form-control" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
                {{--                <div class="row">--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Address 2</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input type="text" class="form-control" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Postcode</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input type="text" class="form-control" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
                {{--                <div class="row">--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">City</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <input type="text" class="form-control" />--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                  <div class="col-md-6">--}}
                {{--                    <div class="form-group row">--}}
                {{--                      <label class="col-sm-3 col-form-label">Country</label>--}}
                {{--                      <div class="col-sm-9">--}}
                {{--                        <select class="form-control">--}}
                {{--                          <option>America</option>--}}
                {{--                          <option>Italy</option>--}}
                {{--                          <option>Russia</option>--}}
                {{--                          <option>Britain</option>--}}
                {{--                        </select>--}}
                {{--                      </div>--}}
                {{--                    </div>--}}
                {{--                  </div>--}}
                {{--                </div>--}}
                {{--              </form>--}}
                {{--            </div>--}}
                {{--          </div>--}}
                {{--        </div>--}}

            </div>
        </div>
        <!-- content-wrapper ends -->

        @include('dashboard_layout.partials._footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

@endsection
