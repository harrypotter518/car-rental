@extends('layouts.app')

@section('content')
    <!-- Inner Heading Start -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="pageTitle" style="margin-top:2vh">
        <div class="container">
            <h1 class="page-heading">
              {{ __('Booking Success') }}
            </h1>
        </div>
    </div> 



        @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            {{-- <p>{!! $message !!}</p> --}}
            <h3 style="color:white">Paypal payment was succesulfully done</h3>
        </div>
        <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('error');?>
        @endif

    	

    <div class="row" style="height:80vh; padding-top:5vh;">
        <div class="container">
            <h3 class="text-center">YOUR ORDER HAS BEEN PLACED</h3>
            <h4 class="text-center">{{ $pick_up_datetime }}~ {{ $drop_off_datetime }}</h4>
            <h4 class="text-center">Total Price: {{ $grand_total  }} &emsp;USD</h4>
            {{-- <p class="text-center">Thanks for your Order that use Options on Cash On Delivery</p> --}}
              <form  method="POST" id="payment-form"
                action="{!! URL::to('paypal') !!}">
                {{ csrf_field() }}
                <input  id="amount" type="hidden" name="amount" value={{ $grand_total }}>
                <div class="formbtn">
                    <button class="btn" style="border-radius:10px" id= "pay_btn" >Pay with Paypal</button>
                </div>                  
            </form>

            {{--  <p class="text-center">We will contact you by Your Email (<b>{{$user_order->users_email}}</b>) or Your Phone Number (<b>{{$user_order->mobile}}</b>)</p>  --}}
            <div  class="text-center" tyle="height:80vh;">
                <img alt=""  src="images/{{ $car_data->image}}" style="padding-top:1rem;height:50vh;">
            </div>
            <h2 class="text-center">{{ $car_data->title }}</h2>
          
        </div>
       
    </div>
 

 



@endsection

@push('js')
    <script>
        $("#pay_btn").on('click', function(){
            $("#pay_btn").hide();
        });
    </script>

@endpush