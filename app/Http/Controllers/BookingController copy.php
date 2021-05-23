<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingACar;
use Illuminate\Support\Facades\Input;
use App\Mail\SendMail;

class BookingController extends Controller
{

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required'
        // ]);
    
        $this->validate($request, [

            'car_name' => 'required',

            'pick_up' => 'required',

            'pick_up_lat' => 'required',

            'pick_up_lng' => 'required',

            'pick_up_datetime' => 'required',

            'drop_off' => 'required',

            'drop_off_lat' => 'required',

            'drop_off_lng' => 'required',

            'drop_off_datetime' => 'required',

            'name' => 'required',

            'email' => 'required',

            'phone' => 'required',

        ]);

        // $details = [
        //     'title' => 'Mail from ItSolutionStuff.com',
        //     'body' => 'This is for testing email using smtp'
        // ];

        // Mail::to('newalexey2020@gmail.com',"dfgdfgdfgdfg")->send(new SendMail($details));
        // return view('email_temps.booking');
     

        $booking = new Booking();

        $booking->car_name = $request->car_name;


        $booking->pick_up = $request->pick_up;

        $booking->pick_up_lat = $request->pick_up_lat;

        $booking->pick_up_lng = $request->pick_up_lng;

        $booking->pick_up_datetime = $request->pick_up_datetime;

        $booking->drop_off = $request->drop_off;

        $booking->drop_off_lat = $request->drop_off_lat;

        $booking->drop_off_lng = $request->drop_off_lng;

        $booking->drop_off_datetime = $request->drop_off_datetime;

        $booking->name = $request->name;

        $booking->email = $request->email;

        $booking->phone = $request->phone;

        $booking->save();

        //Mail::send(new BookingACar($booking));

        $request->session()->flash('message.added', 'success');

        $request->session()->flash('message.content', 'Your form is successfully submitted');

        return redirect()->back();

    }

}
