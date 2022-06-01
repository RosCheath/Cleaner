<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard');
    }

    public function home_d()
    {
        return view('dashboard_layout.pages.home_dashboard');
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
