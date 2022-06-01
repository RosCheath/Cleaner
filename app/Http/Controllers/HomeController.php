<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bookingCount= DB::table('bookings')->count();
        return view('home_layouts.home',compact('bookingCount'));
    }

    public function services()
    {
        $bookingCount= DB::table('bookings')->count();
        $service = Service::get();
        $service_booling = Service::get();
        return view('home_layouts.services',compact('service','bookingCount'),[
            'service_booling' => $service_booling,
        ]);
    }

    public function contact()
    {
        $bookingCount= DB::table('bookings')->count();
        return view('home_layouts.contact',compact('bookingCount'));
    }
    public function about()
    {
        $bookingCount= DB::table('bookings')->count();
        return view('home_layouts.about',compact('bookingCount'));
    }
    public function gallery()
    {
        $bookingCount= DB::table('bookings')->count();
        return view('home_layouts.gallery',compact('bookingCount'));
    }
}
