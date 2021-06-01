@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/metronic_component.css') }}" />

    <!-- Inner Heading Start -->
    <div class="pageTitle" style="margin-top:2vh">
        <div class="container">
            <h1 class="page-heading">
              {{ __('Booking Success') }}
            </h1>
        </div>
    </div>

  <div class="row" style="height:80vh; padding-top:5vh;">

    <?php
      $date = new DateTime('now', new DateTimeZone('America/Chicago'));
    ?>
    <div class="container">
        <h3 class="text-center">YOUR ORDER HAS BEEN PLACED</h3>
        <h4 class="text-center">{{ $date->format('Y-m-d H:i:s')  }} &emsp;(Chicago,USA)</h4>
        <p class="text-center">Thanks for your Order that use Options on Cash On Delivery</p>
        {{--  <p class="text-center">We will contact you by Your Email (<b>{{$user_order->users_email}}</b>) or Your Phone Number (<b>{{$user_order->mobile}}</b>)</p>  --}}
        <div  class="text-center" tyle="height:80vh;">
            <img alt=""  src="images/{{ $car_data->image}}" style="padding-top:1rem;height:50vh;">
        </div>
        <h2 class="text-center">{{ $car_data->title }}</h2>
    </div>
    {{--  <div style="margin-bottom: 20px;"></div>  --}}
  </div>

@endsection

@push('js')

@endpush
