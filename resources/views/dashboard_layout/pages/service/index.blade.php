@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"><a class="btn btn-primary" href="{{route('service.create')}}"> Add Services </a></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chart-js</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                @foreach($services as $service)

                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card p-3">
                        <div class="card" style="width: 32rem;">
                            <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/2490/2490365.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$service -> name}}</h5>
                                <p class="card-text">{{$service -> title}}</p>
                                <p class="card-text">Price : {{$service -> price}} $</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer -->
        @include('dashboard_layout.partials._footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

@endsection
