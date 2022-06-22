@extends('dashboard')
@section('content_dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"><a class="btn btn-primary" href="{{route('users.create')}}"> Create User </a></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List tables</li>
                    </ol>
                </nav>
            </div>
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Table User</h4>
                            <div class="input-group">
                                <div class="form-outline" >
                                    <input type="search" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names.." />
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Phone Number </th>
                                        <th> Sex </th>
                                        <th> Date </th>
                                        <th> Edit </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @if(!empty($user) && $user->count())
                                            @foreach($user as $key => $users)
                                        <td>
                                                <img src="{{$users->image}}" alt="image" />
                                            <span class="pl-2">{{$users->name}}</span>
                                        </td>
                                        <td> {{$users->email}} </td>
                                        <td> {{$users->phone}} </td>
                                        <td> {{$users->sex}} </td>
                                        <td> {{$users->date_of_birth}} </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-security"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                                    <h6 class="dropdown-header">Settings</h6>
                                                    <a class="dropdown-item" href="{{route('users.edit',$users->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="#">See Profile</a>
                                                    <form action="{{ route('users.destroy',$users->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Delete User</button>
                                                    </form>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10">There are no data.</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Table Cleaner</h4>
                            <div class="input-group">
                                <div class="form-outline" >
                                    <input type="search" id="myInput1" onkeyup="myFunction1()" class="form-control" placeholder="Search for names.." />
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="myTable1">
                                    <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Phone Number </th>
                                        <th> Sex </th>
                                        <th> Date </th>
                                        <th> Edit </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @if(!empty($Cleaner) && $Cleaner->count())
                                            @foreach($Cleaner as $key => $cleaner)
                                                <td>
                                                        <img src="{{$cleaner->image}}" alt="image" />
                                                    <span class="pl-2">{{$cleaner->name}}</span>
                                                </td>
                                                <td> {{$cleaner->email}} </td>
                                                <td> {{$cleaner->phone}} </td>
                                                <td> {{$cleaner->sex}} </td>
                                                <td> {{$cleaner->date_of_birth}} </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-security"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                                            <h6 class="dropdown-header">Settings</h6>
                                                            <a class="dropdown-item" href="{{route('users.edit',$cleaner->id)}}">Edit</a>
                                                            <a class="dropdown-item" href="#">See Profile</a>
                                                            <form action="{{ route('users.destroy',$cleaner->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item">Delete User</button>
                                                            </form>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10">There are no data.</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            {{ $users->links() }}--}}
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Striped Table</h4>
                            <p class="card-description"> Add class <code>.table-striped</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> User </th>
                                        <th> First name </th>
                                        <th> Progress </th>
                                        <th> Amount </th>
                                        <th> Deadline </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{asset('assets/dashboard/images/faces-clipart/pic-1.png')}}" alt="image" />
                                        </td>
                                        <td> Herman Beck </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> May 15, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{asset('assets/dashboard/images/faces-clipart/pic-2.png')}}" alt="image" />
                                        </td>
                                        <td> Messsy Adam </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $245.30 </td>
                                        <td> July 1, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                                        </td>
                                        <td> John Richards </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $138.00 </td>
                                        <td> Apr 12, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                                        </td>
                                        <td> Peter Meggik </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 77.99 </td>
                                        <td> May 15, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                        </td>
                                        <td> Edward </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 160.25 </td>
                                        <td> May 03, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                                        </td>
                                        <td> John Doe </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 123.21 </td>
                                        <td> April 05, 2015 </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                                        </td>
                                        <td> Henry Tom </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td> $ 150.00 </td>
                                        <td> June 16, 2015 </td>
                                    </tr>
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
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function myFunction1() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput1");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable1");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
