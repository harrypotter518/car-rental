<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $messages = Booking::orderBy('id','desc')->get();
        return view('admin.booking.index')->with('messages',$messages);
    }

    public function detail($id){
        $message = Booking::findorFail($id);
        $message->status = 'seen';
        $message->update();
        return view('admin.booking.detail')->with('message',$message);
    }
}
