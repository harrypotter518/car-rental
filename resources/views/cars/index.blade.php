@extends('layouts.app')

@section('content')

<!-- Inner Heading Start -->



<div class="pageTitle">

  <div class="container">

    

        <h1 class="page-heading">@if(isset(request()->keyword))

         {{request()->keyword}}

         @else

         {{__('All Cars')}}

         @endif</h1>

      

  </div>

</div>

<!-- Inner Heading End --> 

<!-- Inner Content Start -->

<div class="innercms">

  <div class="container"> 

    <h2>{{__('Choose your Car For Rental')}}</h2>

    <!-- Blog start -->

    <div class="vehiclesList">

      

          @if(null!==($cars))

          <ul class="carslisting">

           @foreach($cars as $car) 

             <li class="item">

          <div class="row">

            <div class="col-md-3">

              <h3>{{$car->title}}</h3>

              <div class="subtitle" style="padding-top: 10px;">{{$car->extra_field_1}}</div>

              <div class="carPrice"> <strong>{{$car->extra_field_2}}</strong> <span>/{{$car->extra_field_3}}</span> </div>
              <div style="margin-top:10px!important">Horsepower:<strong>{{$car->extra_field_4}}</strong></div>

              <a href="javascript:;" onclick="reserve('{{$car->title}}')" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> {{__('Reserve Now')}}</a> </div>

            <div class="col-md-6">

        <div class="carimages owl-carousel">

        @if($car->images!='')  

        <?php
          $images = explode(',', $car->images); 
          $features = explode(',', $car->extra_field_5 );
        ?>

        @if(null!==($images))

        @foreach($images as $img)

          <div class="item"><a href="{{asset('images/'.$img)}}" class="image-popup"><img src="{{asset('images/'.$img)}}" alt="" /></a></div>

        @endforeach

        @endif

        @endif      

          </div>

        </div>

            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>{{__('Features')}}</li>
                  @foreach($features as $feature)
                      {{-- <li>{{__(' a.')}} <strong>{{$feature}}</strong></li> --}}
                      <li>{{$feature}}</li> 
                  @endforeach
                </ul>
              </div>
            </div>
          </div>

        </li>
            @endforeach
          </ul>

          @endif

          

        </div>

        

        <!-- Pagination -->

        <div class="pagiWrap">

            <div class="row">

               <div class="col-md-5">

                  <div class="showreslt">

                     {{__('Showing Pages')}} : {{ $cars->firstItem() }} - {{ $cars->lastItem() }} {{__('Total')}} {{ $cars->total() }}

                  </div>

               </div>

               <div class="col-md-7 text-right">

                  @if(isset($cars) && count($cars))

                  {{ $cars->appends(request()->query())->links() }}

                  @endif

               </div>

            </div> 

          </div>

        </div>

    </div>





<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-xl" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">{{__('Car For Booking')}}</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="container">

  <div class="bformBox carbookext">

    <h3>{{widget(4)->extra_field_1}}</h3>

    <form action="{{route('booking.post')}}" method="POST">

      @csrf

      <div class="formrow">

        {!! Form::select('car_name', [''=>'Select Your Car For Booking']+dataArray(5), null, array('class'=>'form-control', 'id'=>'car_name', 'required'=>'required')) !!}

        {!! APFrmErrHelp::showErrors($errors, 'car_name') !!}

      </div>

      <div class="row">

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> {{__('Pick-Up')}} </span>

             <input type="text" class="form-control" name="pick_up" id="pick_up" placeholder="{{__('Your Address')}}" value="" required="required">

             <input type="hidden" name="pick_up_lat" id="pick_up_lat">

             <input type="hidden" name="pick_up_lng" id="pick_up_lng">

            </div>

          </div>

        </div>

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">

              <input class="form-control" size="16" type="text" value="" readonly placeholder="{{__('Select Date and Time')}}" name="pick_up_datetime" required >

              <span class="input-group-addon"><i class="fas fa-calendar"></i></span> </div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> {{__('Drop-Off')}}</span>

              <input type="text" class="form-control" name="drop_off" id="drop_off" placeholder="{{__('Your Drop Off Address')}}" value="">

              <input type="hidden" name="drop_off_lat" id="drop_off_lat">

             <input type="hidden" name="drop_off_lng" id="drop_off_lng">

            </div>

          </div>

        </div>

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">

              <input class="form-control" size="16" type="text" value="" readonly placeholder="{{__('Select Date and Time')}}" name="drop_off_datetime" required >

              <span class="input-group-addon"><i class="fas fa-calendar"></i></span> </div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-4 col-sm-4">

          <div class="formrow">

            <input type="text" class="form-control" placeholder="{{__('Your Name')}}" name="name" required >

          </div>

        </div>

        <div class="col-md-4 col-sm-4">

          <div class="formrow">

            <input type="email" class="form-control" placeholder="{{__('Your Email')}}" name="email" required>

          </div>

        </div>

        <div class="col-md-4 col-sm-4">

          <div class="formrow">

            <input type="text" class="form-control" placeholder="{{__('Phone')}}" name="phone" required>

          </div>

        </div>

      </div>

      <div class="formbtn">

        <input type="submit" class="btn" value="{{widget(4)->extra_field_2}}">

      </div>

    </form>

  </div>

</div>

      </div>

    </div>

  </div>

</div>



<!-- Inner Content Start --> 

@endsection



@push('js')

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{widget(17)->extra_field_1}}&libraries=places"></script>
<script type="text/javascript" src="{{asset('js/cars.js')}}"></script>
@if(session()->has('message.added'))
<script type="text/javascript">
  var msg = '{!! session('message.content' )!!}';
</script>
<script type="text/javascript" src="{{asset('js/order.js')}}"></script>
@endif
@endpush