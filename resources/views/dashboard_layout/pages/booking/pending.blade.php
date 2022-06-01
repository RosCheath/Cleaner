@extends('dashboard')
@section('content_dashboard')

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Basic Tables </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
          </ol>
        </nav>
      </div>
      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Book Status</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </th>
                      <th> Client Name </th>
                      <th> Book No </th>
                      <th> Product Cost </th>
                      <th> Service </th>
                      <th> Locations </th>
                      <th> Book Date </th>
                      <th> Book Status </th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($pending as $pending)
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="{{asset('assets/dashboard/images/faces/face1.jpg')}}" alt="image" />
                        <span class="pl-2">{{$pending->service->name}}</span>
                      </td>
                      <td> 02312 </td>
                      <td> $14,500 </td>
                      <td> HouseKeeping </td>
                      <td> PhnomPenh... </td>
                      <td> 04 Dec 2019 </td>
                      <td>
{{--                          <div class="badge badge-outline-warning">{{$pending->status_type}}</div>--}}
                          <div class="dropdown">
                              <button class="badge badge-outline-warning dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <a>{{$pending->status_type}}</a>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">

                                  <a class="dropdown-item" href="{{route('pending.edit',$pending->id)}}">Edit</a>
                              </div>
                          </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer -->
    @include('dashboard_layout.partials._footer')
    <!-- partial -->
  </div>
  <!-- main-panel ends -->

@endsection
