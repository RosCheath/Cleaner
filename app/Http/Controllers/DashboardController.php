<?php

namespace App\Http\Controllers;

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
        return view('dashboard_layout.pages.booking.pending');
    }

    public function dropdown()
    {
        return view('dashboard_layout.pages.booking.dropdowns');
    }

    public function typography()
    {
        return view('dashboard_layout.pages.booking.typography');
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
