@extends('dashboard')
@section('content_dashboard')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Add Users </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><form method="POST" action="{{ route('cleaner.store') }}" enctype="multipart/form-data">
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
              <h4 class="card-title">Create Cleaner</h4>
              <p class="card-description"> Create Cleaner </p>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required placeholder="Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                  <div class="form-group">
                      <label for="date_of_birth">date</label>
                      <input type="date" class="form-control" @error('date_of_birth') is-invalid @enderror name="date_of_birth" id="date_of_birth" required placeholder="Date of Birth">
                      @error('date_of_birth')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                      <select class="form-control" name="sex" id="sex">
                          <option value="Male" @if(Auth::user()->sex == "Male") selected @endif>Male</option>
                          <option value="Female" @if(Auth::user()->sex == "Female") selected @endif>Female</option>
                      </select>
                  </div>

                  <input type="file" class="image" name="image">

                <div class="form-group">
                  <label for="exampleInputCity1">Phone</label>
                  <input type="text" class="form-control" @error('phone') is-invalid @enderror name="phone" id="phone" required placeholder="Phone Number">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                  <div class="form-group">
                      <label for="exampleInputCity1">ID Card</label>
                      <input type="text" class="form-control" @error('phone') is-invalid @enderror name="id_card" id="id_card" required placeholder="ID Card">
                      @error('id_card')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                  </div>

                  <input type="hidden" name="role" value="Cleaner">

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

      </div>
    </div>
    <!-- content-wrapper ends -->

    @include('dashboard_layout.partials._footer')
    <!-- partial -->
  </div>
  <!-- main-panel ends -->

@endsection
