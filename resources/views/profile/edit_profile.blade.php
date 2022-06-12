
<link rel="stylesheet" href="profile.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<div class="container rounded bg-white mt-5 mb-5">
    <form action="{{route('update_profile',$profile->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <div class="row">
        <div class="col-md-3 border-right">
            @if(Auth::user()->image === 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419')
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{Auth::User()->image}}"><span class="font-weight-bold">{{Auth::User()->name}}</span><span class="text-black-50">{{Auth::User()->email}}</span><span> </span></div>
            @else
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{ url('storage/ProfileImage/'. Auth::User()->image) }}"><span class="font-weight-bold">{{Auth::User()->name}}</span><span class="text-black-50">{{Auth::User()->email}}</span><span> </span></div>
            @endif
        </div>
        <div class="col-md-5 border-right">
            <form>
                <input type="button" value="Go back!" onclick="history.back()">
            </form>
            <div class="p-3 py-5">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" id="name" name="name" class="form-control" placeholder="name" value="{{Auth::User()->name}}"></div>
                    <div class="col-md-6"><label class="labels">Role</label><input type="text" id="role" name="role" class="form-control" value="{{Auth::User()->role}}" placeholder="Role"></div>
                </div>

                <input type="file" class="image" name="image" value="{{Auth::User()->image}}">

                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" id="phone" name="phone" class="form-control" placeholder="enter phone number" value="{{Auth::User()->phone}}"></div>
                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" id="sex" class="form-control" name="sex" placeholder="enter Gender" value="{{Auth::User()->sex}}"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" id="email" name="email" class="form-control" placeholder="enter email address" value="{{Auth::User()->email}}"></div>
                    <div class="col-md-12"><label class="labels">BOD</label><input type="date" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="enter BOD" value="{{Auth::User()->date_of_birth}}"></div>
                    <div class="col-md-12"><label class="labels">Card ID</label><input type="text" id="id_card" name="id_card" class="form-control" placeholder="id card" value="{{Auth::User()->id_card}}"></div>
                </div>
                <div class="row mt-3">
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
    </div>
    </form>
</div>

