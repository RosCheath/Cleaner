<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::get();
        return view('booking.booking_index',compact('booking'));

    }
//    public function create(){
//        return view('booking.booking_create');
//    }
    public function store(Request $request){
        $this->validate(request(), [
            'location' => ['required', 'string', 'max:1000'],
            'telegram' => ['required', 'string', 'max:25'],
        ]);
        $booking = new Booking();
        $booking -> user_id = Auth::id();
        $booking -> service_id = $request->service_id;
        $booking -> location = $request -> location;
        $booking -> telegram = $request -> telegram;
        $booking -> date = $request -> date;
        $booking -> time = $request -> time;
//        dd($booking);
        $booking->save();
        return redirect()->back()
            ->with('success','Cleaner created successfully.');
    }
}
