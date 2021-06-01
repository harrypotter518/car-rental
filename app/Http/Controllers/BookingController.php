<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // $booking = new Booking();
        // $booking->car_name = $request->car_name;
        // $booking->pick_up = $request->pick_up;
        // $booking->pick_up_lat = $request->pick_up_lat;
        // $booking->pick_up_lng = $request->pick_up_lng;
        // $booking->pick_up_datetime = $request->pick_up_datetime;
        // $booking->drop_off = $request->drop_off;
        // $booking->drop_off_lat = $request->drop_off_lat;
        // $booking->drop_off_lng = $request->drop_off_lng;
        // $booking->drop_off_datetime = $request->drop_off_datetime;
        // $booking->name = $request->name;
        // $booking->email = $request->email;
        // $booking->phone = $request->phone;
        // $booking->save();

        //Mail::send(new BookingACar($booking));

        $booking_data = array(
            "car_name"=> $request->car_name,

            "pick_up" => $request->pick_up,

            "pick_up_lat" => $request->pick_up_lat,

            "pick_up_lng" => $request->pick_up_lng,

            "pick_up_datetime" => $request->pick_up_datetime,

            "drop_off" => $request->drop_off,

            "drop_off_lat" => $request->drop_off_lat,

            "drop_off_lng" => $request->drop_off_lng,

            "drop_off_datetime" => $request->drop_off_datetime,

            "name" => $request->name,

            "email" => $request->email,

            "phone" => $request->phone
        );

        $booking_car = DB::table('bookings')->select("pick_up_datetime", "drop_off_datetime", "car_name")->where("car_name", $booking_data["car_name"])->get();
        
        for ($i =0; $i<count($booking_car); $i++)
        {
            if( ($booking_data["pick_up_datetime"] >= $booking_car[$i]->pick_up_datetime  && $booking_data["pick_up_datetime"] <= $booking_car[$i]->drop_off_datetime) || ($booking_data["drop_off_datetime"] >= $booking_car[$i]->pick_up_datetime  && $booking_data["drop_off_datetime"] <= $booking_car[$i]->drop_off_datetime) ) 
            {             
                $booking_time =  $booking_car[$i];
                return view('welcome', compact('booking_time'));
            }
        }  
        
        $daily_car_price = DB::table('modules_data')->select("extra_field_2")->where("title", $request->car_name)->get();
        // $request->session()->flash('message.added', 'success');

        // $request->session()->flash('message.content', 'Your form is successfully submitted');

        // return redirect()->back();
        $countries = DB::table('countries')->get();

        // get Date difference as total difference
        $d1 = strtotime($request->pick_up_datetime);
        $d2 = strtotime($request->drop_off_datetime);

        $totalSecondsDiff = abs($d1 - $d2); //42600225
        $totalDaysDiff = round($totalSecondsDiff / 60 / 60 / 24); //493.05
        $daily_car_price = DB::table('modules_data')->select("extra_field_2")->where("title", $request->car_name)->get();
        $car_price = floatval(substr(($daily_car_price[0]->extra_field_2), 1)) * $totalDaysDiff;

        return view('booking_details.index', compact('countries', 'totalDaysDiff', 'car_price', 'booking_data'));

    }

    public function submitcheckout(Request $request)
    {
        $this->validate($request, [
            'billing_name' => 'required',
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_state' => 'required',
            // 'billing_pincode' => 'required',
            'billing_phonenumber' => 'required',
            // 'shipping_name' => 'required',
            // 'shipping_address' => 'required',
            // 'shipping_city' => 'required',
            // 'shipping_state' => 'required',
            // 'shipping_pincode' => 'required',
            // 'shipping_phonenumber' => 'required',
        ]);
        $input_data = $request->all();

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
        $booking->address = $request->billing_address;
        $booking->city = $request->billing_city;
        $booking->state = $request->billing_state;
        $booking->country = $request->billing_country;
        $booking->payment_method = $request->payment_method;
        $booking->grand_total = $request->total_budget;

        $booking->following_product_1 = $request->checkbox1;
        $booking->following_product_2 = $request->checkbox2;
        $booking->following_product_3 = $request->checkbox3;
        $booking->following_product_4 = $request->checkbox4;
        if ($request->checkbox5 == "on")
            $booking->following_product_5 = $request->checkbox5_input;
        else
            $booking->following_product_5 = $request->checkbox5;
              
        if ($request->checkbox6 == "on")
        {
            if ($request->radio_pick == "yes")
                $booking->following_product_6 = "yes";
            else
                $booking->following_product_6 = $request->checkbox6_input;
        }
        else
            $booking->following_product_6 = $request->checkbox6;

        if ($request->checkbox11 == "on")      
            $booking->insurance_1 = $request->checkbox11_company.",".$request->checkbox11_policy;      
        else
            $booking->insurance_1 = $request->checkbox11;
        $booking->insurance_2 = $request->checkbox12;
        $booking->insurance_3 = $request->checkbox13;
        $booking->save();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Your form is successfully submitted');

        $payment_method = $input_data['payment_method'];
        // Orders_model::create($input_data);
        $car_data = DB::table('modules_data')->select("title","image")->where('title',$request->car_name)->get()[0];
    
        if ($payment_method == "COD") {
            return view('payment.cod',compact('car_data'));
        } else {
            return view('payment.paypal',compact('car_data'));
        }

    }

}
