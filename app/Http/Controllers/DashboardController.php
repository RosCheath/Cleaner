<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard');
    }

    public function home_d()
    {
        $userCount = User::with('role')->where('role', 'User')->count();
        $CleanerCount = User::with('role')->where('role', 'Cleaner')->count();
        $allBooking = DB::table('bookings')->count();
        $pending = Booking::where('status_type', 'Pending')->count();
        $approved = Booking::where('status_type', 'Approved')->count();
        $done = Booking::where('status_type', 'Done')->count();
        $rejected = Booking::where('status_type', 'Rejected')->count();
        return view('dashboard_layout.pages.home_dashboard',compact(('userCount'),
        'CleanerCount',
        'allBooking',
        'pending',
        'approved',
        'done',
        'rejected',
        ));
    }
// funtion for user list
//    public function users_list()
//    {
//        return view('dashboard_layout.pages.users_list');
//    }



    public function pending()
    {
        $pending = Booking::with('statuses')->where('status_type', 'Pending')->get();
        return view('dashboard_layout.pages.booking.pending',compact('pending'));
    }

    public function edit(Booking $pending){
        return view('dashboard_layout.pages.booking.edit_test',compact('pending'));
    }

    public function update(Request $request, Booking $pending){
//        $this->validate(request(), [
//            'cleaner_id' => 'required',
//        ]);

        $input = $request->all();
        $input ['cleaner_id'] =Auth::id();
//        dd($input);
//        $booking->update($request->all());
//        dd($booking);
//        $booking ['cleaner_id'] =Auth::id();
//        $booking->location = $request['location'];
//        $booking->service_id = $request['service_id'];
//        $booking->user_id = $request['user_id'];
//        $booking->telegram = $request['telegram'];
//        $booking->status_type = $request['status_type'];
//        $booking->date = $request['date'];
//        $booking->time = $request['time'];
//        dd($pending);
        $pending->update($input);
//        dd($booking);
        return redirect()->route('pending')
            ->with('success','Cleaner updated successfully');
    }

    public function approved()
    {
        $approved = Booking::with('statuses')->where('status_type', 'Approved')->get();
        return view('dashboard_layout.pages.booking.approved',compact('approved'));
    }

    public function Booking_Service()
    {
        $booking_service = Booking::with('statuses')->where('status_type', 'Rejected')->orWhere('status_type','Done')->get();
        return view('dashboard_layout.pages.booking.Booking_Service',compact('booking_service'));
    }


// funtion for create users
//    public function create_users()
//    {
//        return view('dashboard_layout.pages.create_users');
//    }

    public function chart()
    {
        return view('dashboard_layout.pages.chartjs');
    }
    public function icon()
    {
        return view('dashboard_layout.pages.icon');
    }

    public function blank()
    {
        return view('dashboard_layout.pages.samples.blank-page');
    }

    public function p404()
    {
        return view('dashboard_layout.pages.samples.error-404');
    }

    public function p500()
    {
        return view('dashboard_layout.pages.samples.error-500');
    }

    public function login()
    {
        return view('dashboard_layout.pages.samples.login');
    }
    public function register()
    {
        return view('dashboard_layout.pages.samples.register');
    }
}
