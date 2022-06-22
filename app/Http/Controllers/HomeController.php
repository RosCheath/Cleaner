<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ImageHeads;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        $homeimage  = ImageHeads::where('name','=', 'Home Screen')->get();
        return view('home_layouts.home',compact('bookingCount','homeimage'));
    }

    public function services()
    {
        $serviceimage  = ImageHeads::where('name','=', 'Service Screen')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        $service = Service::get();
        $service_booling = Service::get();
        return view('home_layouts.services',compact('service','bookingCount','serviceimage'),[
            'service_booling' => $service_booling,
        ]);
    }

    public function contact()
    {
        $contactimage  = ImageHeads::where('name','=', 'Contact Screen')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        return view('home_layouts.contact',compact('bookingCount','contactimage'));
    }
    public function about()
    {
        $aboutimage  = ImageHeads::where('name','=', 'About Screen')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        return view('home_layouts.about',compact('bookingCount','aboutimage'));
    }
//    public function gallery()
//    {
//        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
//        return view('home_layouts.gallery',compact('bookingCount'));
//    }
}
