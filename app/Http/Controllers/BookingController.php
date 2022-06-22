<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ImageHeads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $bookingimage  = ImageHeads::where('name','=', 'Booking Screen')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        $booking_1 = Booking::where('status_type','=','Pending')->get();
        $booking_2 = Booking::where('status_type','=','Approved')->orWhere('status_type','Done')->orWhere('status_type','Rejected')->get();
        return view('booking.booking_index',compact('booking_1','bookingCount','booking_2','bookingimage'));

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


    public function edit(Booking $booking){
        return view('booking.edit',compact('booking'));
    }

    public function update(Request $request, Booking $booking){
        $input = $request->all();
        $booking->save($input);
//        dd($booking);
        return redirect()->route('pending')
            ->with('success','Cleaner updated successfully');
    }







    public function invoice(Booking $booking){
        return view('booking.invoice',compact('booking'));
    }


}
