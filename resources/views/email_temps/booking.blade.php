@extends('layouts.mail')
@push('css')

<style type="text/css">
  .error{
    color: red;
  }
</style>
@endpush
@section('content')
<div class="innerContent-wrap">
  <div class="container">
    <table class="table table-bordered">
   
    <tbody>
        <tr>
          <th scope="row">Car For Booking</th>
          <td>ffffffff</td>
        </tr>
          <tr>
          <th scope="row">Pick-Up</th>
          <td>dffsfs</td>
        </tr>
        </tbody>
      {{-- <tbody>
        <tr>
          <th scope="row">Car For Booking</th>
          <td>{{$booking->car_name}}</td>
        </tr>
        <tr>
          <th scope="row">Pick-Up</th>
          <td>{{$booking->pick_up}}</td>
        </tr>

        <tr>
          <th scope="row">Pick-Up DateTime</th>
          <td>{{$booking->pick_up_datetime}}</td>
        </tr>

        <tr>
          <th scope="row">Drop-Off</th>
          <td>{{$booking->drop_off}}</td>
        </tr>

        <tr>
          <th scope="row">Drop-Off DateTime</th>
          <td>{{$booking->drop_off_datetime}}</td>
        </tr>

        <tr>
          <th scope="row">Name</th>
          <td>{{$booking->name}}</td>
        </tr>
        <tr>
          <th scope="row">Email</th>
          <td>{{$booking->email}}</td>
        </tr>
        <tr>
          <th scope="row">Phone</th>
          <td>{{$booking->phone}}</td>
        </tr>
      </tbody> --}}
    </table>
  </div>
</div>
@endsection