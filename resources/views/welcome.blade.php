@extends('layouts.app')


@section('content')

<!-- Home Section -->

@if(widget(1)->radio_button_1==1)

<!-- Slider Section -->

<div class="tp-banner-container" id="slider">

  <div class="tp-banner">

    <ul> 

      @if(null!==(module(4))) 

      @foreach(module(4) as $slider) 

      <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="{{asset('images/'.$slider->image)}}">

        <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280" data-speed="600" data-start="1000">{{$slider->title}}</div>

        <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310" data-speed="600" data-start="1600">{!!removeTags($slider->extra_field_1)!!}</div>

        <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="400" data-speed="600" data-start="2200"><a href="{!!removeTags($slider->extra_field_3)!!}" class="section-btn">{!!removeTags($slider->extra_field_2)!!}</a></div>

      </li>

      @endforeach

      @endif    
    </ul>

  </div>

</div>

<!-- Slider End -->

@else

{{--  <div id="home" class="parallax-section" style="background: url({{asset('images/'.widget(3)->extra_image_1)}}) no-repeat bottom;">   --}}
<div id="home" class="parallax-section" > 

  <!--     <div class="overlay"></div>-->

  <div class="container">

    <div class="row">

      <div class="col-lg-12">

        <div class="slide-text">

          <h3>{{ widget(3)->extra_field_1 }} <a href="" class="typewrite" data-period="2000" data-type='[ "{{ widget(3)->extra_field_2 }}", "{{ widget(3)->extra_field_3 }}", "{{ widget(3)->extra_field_4 }}" ]'> <span class="wrap"></span> </a> </h3>

          <h1>{{ widget(3)->extra_field_5 }}</h1>

          <p>{{ widget(3)->description }}</p>

    
        </div>

      </div>

    </div>

  </div>

</div>

@endif



<div class="container">

  <div class="bformBox" style="border-radius:2rem; box-shadow: 0px 10px 10px rgba(0 0 0 /100%);">

    <h3>{{widget(4)->extra_field_1}}</h3>

    <form action="{{route('booking.post')}}" method="POST">

      @csrf

     

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
      <div class="row">

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group"> 
              <span class="input-group-addon"  style="border-top-left-radius:1rem;border-bottom-left-radius:1rem;"><i class="fa fa-map-marker" aria-hidden="true"></i>{{__('Pick-Up')}}</span>

              <input type="text" class="form-control" name="pick_up" id="pick_up" placeholder="{{__('Your Address')}}" value=""  style="border-top-left-radius:0rem;border-bottom-left-radius:0rem;" required="required">

              <input type="hidden" name="pick_up_lat" id="pick_up_lat">

              <input type="hidden" name="pick_up_lng" id="pick_up_lng">

            </div>

          </div>

        </div>

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">

              <input class="form-control" size="16" type="text" value="" readonly placeholder="{{__('Select Date and Time')}}" name="pick_up_datetime" style="border-top-right-radius:0rem;border-bottom-right-radius:0rem;" required >

              <span class="input-group-addon" style="border-top-right-radius:1rem;border-bottom-right-radius:1rem;"><i class="fas fa-calendar"></i></span> </div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group"> 
              <span class="input-group-addon" style="border-top-left-radius:1rem;border-bottom-left-radius:1rem;"><i class="fa fa-map-marker" aria-hidden="true"></i> {{__('Drop-Off')}}</span>

              <input type="text" class="form-control" name="drop_off" id="drop_off" placeholder="{{__('Your Drop Off Address')}}" value="" style="border-top-left-radius:0rem;border-bottom-left-radius:0rem;" >

              <input type="hidden" name="drop_off_lat" id="drop_off_lat">

             <input type="hidden" name="drop_off_lng" id="drop_off_lng">

            </div>

          </div>

        </div>

        <div class="col-md-6 col-sm-6">

          <div class="formrow">

            <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">

              <input class="form-control" size="16" type="text" value="" readonly placeholder="{{__('Select Date and Time')}}" name="drop_off_datetime" style="border-top-right-radius:0rem;border-bottom-right-radius:0rem;" required >

              <span class="input-group-addon" style="border-top-right-radius:1rem;border-bottom-right-radius:1rem;"><i class="fas fa-calendar"></i></span> </div>

          </div>

        </div>

      </div>

      <div style ="color:white; padding-left:3rem;">a. 111 W Wacker Drive (Free)</div>
      <div style ="color:white; padding-left:3rem; padding-bottom:1rem">b. my car to me within 30 miles of Chicago ($100-$200: you will be taken to a delivery page before check out)</div>

      <div class="formrow">

        {!! Form::select('car_name', [''=>'Select Your Car For Booking']+dataArray(5), null, array('class'=>'form-control', 'id'=>'car_name', 'required'=>'required') )!!}

        {!!removeTags( APFrmErrHelp::showErrors($errors, 'car_name') )!!}

      </div>

  

      <div class="formbtn">

        <input type="submit" class="btn" value="{{widget(4)->extra_field_2}}"  style="border-radius:1rem">

      </div>

    </form>

    <a href="/booking_details" class="btn btn-default section-btn"  style="float:right; margin-top:-4.5vh">{{ widget(3)->extra_field_6 }}</a> 
  
  </div>

</div>





<div class="parallax-section" id="cars">

  <div class="container">

    <div class="section-title">

      <h3>{{widget(5)->extra_field_1}} <span>{{widget(5)->extra_field_2}}</span></h3>

      <p>{{widget(5)->description}}</p>

    </div>

    <div class="vehiclesList">

      <ul class="carsmodals owl-carousel">

        @if(null!==(module(5))) 

        @foreach(module(5) as $car) 

        <li class="item">

          <div class="row">

            <div class="col-md-3">

              <h3  style="margin-top: 1vh;">{{$car->title}}</h3>

              <div class="subtitle"  style="padding-top: 3vh;">{{$car->extra_field_1}}</div>

              <div class="carPrice"  style="padding-top: 1vh;"> <strong>{{$car->extra_field_2}}</strong> <span>/{{$car->extra_field_3}}</span> </div>
              <div style="padding-top: 2vh;">Horsepower:<strong>{{$car->extra_field_4}}</strong></div>

              <a href="javascript:;" onclick="reserve('{{$car->title}}')" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> {{__('Reserve Now')}} </a> </div>

            <div class="col-md-6"><a href="{{asset('images/'.$car->image)}}" class="image-popup"><img src="{{asset('images/'.$car->image)}}" alt="" /></a></div>

            <div class="col-md-3">

              <div class="carinfo">

        
                <ul>
                  <li><strong>{{__('Features')}}</strong></li>
                  <?php   $features = explode(',', $car->extra_field_5 ); ?>
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

        @endif

      </ul>

    </div>

  </div>

</div>



{{-- <!-- Service 1 -->

<div class="servicesbox bg1" style="background: url({{asset('images/'.widget(6)->extra_image_1)}})">

  <div class="container">

    <div class="row">

      <div class="col-md-6 col-md-offset-6">

        <h3>{{widget(6)->extra_field_1}}</h3>

        <div class="ctoggle">

          <p>{{widget(6)->description}}</p>

          <a href="{{widget(6)->extra_field_3}}" class="readmore">{{widget(6)->extra_field_2}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

      </div>

    </div>

  </div>

</div>



<!-- About section -->

<div id="about">

  <div class="container">

    <div class="section-title">

      <h3>{!!removeTags(widget(7)->extra_field_1)!!}</h3>

      <p>{{widget(7)->extra_field_2}}</p>

    </div>

    <div class="about-desc">

      <div class="row">

        <div class="col-md-7">

          <ul class="circleList row">

            <li class="col-md-4 col-sm-4">

              <div class="cricle"><i class="fa fa-car" aria-hidden="true"></i></div>

              <div class="title">{{widget(7)->extra_field_3}}</div>

            </li>

            <li class="col-md-4 col-sm-4">

              <div class="cricle"><i class="fa fa-users" aria-hidden="true"></i></div>

              <div class="title">{{widget(7)->extra_field_4}}</div>

            </li>

            <li class="col-md-4 col-sm-4">

              <div class="cricle"><i class="fa fa-tags" aria-hidden="true"></i></div>

              <div class="title">{{widget(7)->extra_field_5}}</div>

            </li>

          </ul>

          <p>{{widget(7)->description}}</p>

          <?php $bullets = json_decode(widget(7)->bullets); ?>

          <ul class="orderlist">

            @if(null!==($bullets))

            @foreach($bullets as $bullet)

            <li>{{$bullet->bullets}}</li>

            @endforeach

            @endif

          </ul>

        </div>

        <div class="col-md-5">

          <div class="postimg"><img src="{{asset('images/'.widget(7)->extra_image_1)}}"></div>

        </div>

      </div>

    </div>

  </div>

</div>



<!-- Counter Section -->

<div id="counter" style="background: url({{asset('images/'.widget(8)->extra_image_1)}})">

  <div class="container">

    <div class="row">

      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">

        <div class="counterbox">

          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>

          <span class="counter-number" data-from="1" data-to="{{widget(8)->extra_field_2}}" data-speed="1000"></span> <span class="counter-text">{{widget(8)->extra_field_1}}</span> </div>

      </div>

      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">

        <div class="counterbox">

          <div class="counter-icon"><i class="fa fa-car" aria-hidden="true"></i></i></div>

          <span class="counter-number" data-from="1" data-to="{{widget(8)->extra_field_4}}" data-speed="2000"></span> <span class="counter-text">{{widget(8)->extra_field_3}}</span> </div>

      </div>

      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">

        <div class="counterbox">

          <div class="counter-icon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>

          <span class="counter-number" data-from="1" data-to="{{widget(8)->extra_field_6}}" data-speed="3000"></span> <span class="counter-text">{{widget(8)->extra_field_5}}</span> </div>

      </div>

      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">

        <div class="counterbox">

          <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>

          <span class="counter-number" data-from="1" data-to="{{widget(8)->extra_field_8}}" data-speed="4000"></span> <span class="counter-text">{{widget(8)->extra_field_7}}</span> </div>

      </div>

    </div>

  </div>

</div>



<!-- Service Section -->

<div id="service" class="parallax-section" >

  <div class="container"> 

    <!-- Section Title -->

    <div class="section-title" >

      <h3>{!!removeTags(widget(9)->extra_field_1)!!}</h3>

      <p>{{widget(9)->description}}</p>

    </div>

    <div class="row">

      @if(null!==(module(6))) 

      @foreach(module(6) as $service) 

      <div class="col-md-4 col-sm-6">

        <div class="service-thumb">

          <div class="thumb-icon">{!!removeTags($service->extra_field_1)!!}</div>

          <h4>{!!removeTags($service->title)!!}</h4>

          {!!removeTags($service->description)!!}

        </div>

      </div>

      @endforeach

      @endif

    </div>

  </div>

</div>



<!-- Tagline Section -->

<div class="taglinewrap" style="background: url({{asset('images/'.widget(10)->extra_image_1)}})">

  <div class="container">

    <h2>{!!removeTags(widget(10)->extra_field_1)!!}</h2>

    <p>{!!removeTags(widget(10)->description)!!} </p>

    <a href="{!!removeTags(widget(10)->extra_field_3)!!}">{!!removeTags(widget(10)->extra_field_2)!!} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

</div>



<!-- Team Section -->

<div id="team" class="parallax-section">

  <div class="container"> 

    

    <!-- Dection Title -->

    <div class="section-title" >

      <h3>{!!removeTags(widget(11)->extra_field_1)!!}</h3>

      <p>{!!removeTags(widget(11)->description)!!}</p>

    </div>

    <div class="row">

      @if(null!==(module(7))) 

      @foreach(module(7) as $expert)

      <div class="col-md-3 col-sm-6" >

        <div class="team-thumb">

          <div class="thumb-image"><img src="{{asset('images/'.$expert->image)}}" alt=""></div>

          <h4>{!!removeTags($expert->title)!!}</h4>

          <h5>{!!removeTags($expert->extra_field_1)!!}</h5>

          <div class="contct"><i class="fa fa-phone" aria-hidden="true"></i> {!!removeTags($expert->extra_field_2)!!}</div>

          <div class="contct"><i class="fa fa-envelope-o" aria-hidden="true"></i> {!!removeTags($expert->extra_field_3)!!}</div>

          <ul class="list-inline social">

            <li> <a href="{!!removeTags($expert->extra_field_4)!!}" class="bg-twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>

            <li> <a href="{!!removeTags($expert->extra_field_5)!!}" class="bg-facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a> </li>

            <li> <a href="{!!removeTags($expert->extra_field_6)!!}" class="bg-linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i></a> </li>

          </ul>

        </div>

      </div>

      @endforeach

      @endif

    </div>

  </div>

</div>



<!-- Testimonials Section -->

<div id="testimonials" style="background: url({{asset('images/'.widget(12)->extra_image_1)}})">

  <div class="container"> 

    

    <!-- Section Title -->

    <div class="section-title">

      <h3>{!!removeTags(widget(12)->extra_field_1)!!}</h3>

    </div>

    <ul class="testimonialsList owl-carousel">

      @if(null!==(module(8))) 

      @foreach(module(8) as $testimoinial)

      <li class="item">

        <div class="rating"> 

          <?php if($testimoinial->extra_field_2 == 5){?>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

              <?php }else if($testimoinial->extra_field_2 == 4){ ?>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="far fa-star"></i>

              <?php }else if($testimoinial->extra_field_2 == 3){ ?>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

              <?php }else if($testimoinial->extra_field_2==2){ ?>

                  <i class="fa fa-star"></i>

                  <i class="fa fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

              <?php }else if($testimoinial->extra_field_2==1){ ?>

                  <i class="fa fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

              <?php }else if($testimoinial->extra_field_2==0){ ?>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

                  <i class="far fa-star"></i>

              <?php } ?>

         </div>

        {!!removeTags($testimoinial->description)!!}

        <div class="clientname">{{$testimoinial->title}}</div>

        <div class="clientinfo">{{$testimoinial->extra_field_1}}</div>

      </li>

      @endforeach

      @endif

    </ul>

  </div>

</div> --}}



{{-- <div id="blog">

  <div class="container"> 

    <!-- SECTION TITLE -->

    <div class="section-title" >

      <h3>{!!removeTags(widget(13)->extra_field_1)!!}</h3>

      <p>{!!removeTags(widget(13)->description)!!}</p>

    </div>

    <ul class="blogGrid owl-carousel">

      @if(null!==(module(3))) 

      @foreach(module(3) as $blog)

      <?php 

          $cate_ids = explode(",", $blog->category_ids);

          $categories = App\Models\ModulesData::whereIn('id', $cate_ids)->where('status','active')->get();



        $cate_array = array();

        foreach ($categories as $cat) {

            $cate_array[] = "<a href='" . route('blogs.list','cate='.$cat->id) . "'>$cat->title</a>";

        }  

      ?>

      <li class="item">

        <div class="int"> 

          

          <!-- Blog Image -->

          <div class="postimg"> <img src="{{asset('images/thumb/'.$blog->image)}}" alt="{{$blog->title}}"></div>

          <!-- Blog info -->

          <div class="post-header">

            <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('M d, Y',strtotime($blog->created_at))}}</div>

            <h4><a href="{{route('blogs.detail',$blog->slug)}}">{{$blog->title}}</a></h4>

            <div class="postmeta">{{__('Category')}} : {!!removeTags(implode(', ',$cate_array))!!}</div>

            <a href="{{route('blogs.detail',$blog->slug)}}" class="readmore">{{__('Read More')}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>

        </div>

      </li>

      @endforeach

      @endif

    </ul>

  </div>

</div> --}}



<!-- Newsletter-->

<div class="newsletter">

  <div class="container">

    <div class="row">

      <div class="col-md-4">

        <h3>{!!removeTags(widget(14)->extra_field_1)!!}</h3>

        <p>{!!removeTags(widget(14)->description)!!}</p>

      </div>

      <div class="col-md-8">

         <form id="newsletter">

            @csrf

            <div class="input-group">

              <input type="text" class="form-control" name="email" id="email" placeholder="{{__('Enter Your Email Address')}}">

              <span class="input-group-btn">

              <button class="btn btn-secondary" type="submit">{{__('Sign Up')}} <i class="fa fa-paper-plane" aria-hidden="true"></i></button>

              </span> 

            </div>

          </form>

      </div>

    </div>

  </div>

</div>



<div id="map">

  <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags(widget(1)->extra_field_4))}}&output=embed" height="300" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 

</div>



<!-- Contact Section -->

<div id="contact">

  <div class="container"> 

    

    <!-- Dection Title -->

    <div class="section-title" >

      <h3>{!!removeTags(widget(15)->extra_field_1)!!}</h3>

      <p>{!!removeTags(widget(15)->description)!!}</p>

    </div>

    

    <!-- CONTACT FORM HERE -->

    <div class="row">

      <div class="col-md-8">

        <div class="contact-form">

          <form method="post" action="{{route('contact.post')}}" id="contactForm">

                @csrf

                <div class="row">

                  <div class="col-lg-6">

                      <input type="text" name="first_name" class="form-control" placeholder="{{__('First Name')}}" required="required">

                  </div>

                  <div class="col-lg-6">

                      <input type="text" name="last_name" class="form-control" placeholder="{{__('Last Name')}}" required="required">

                  </div>

                  <div class="col-lg-6">

                      <input type="email" name="email_address" class="form-control" placeholder="{{__('Email Address')}}" required="required">

                  </div>

                  <div class="col-lg-6">

                      <input type="text" name="phone_number" class="form-control" placeholder="{{__('Phone')}}" required="required">

                  </div>

                  <div class="col-lg-12">

                      <textarea required="required" class="form-control" name="message" placeholder="{{__('Message')}}"></textarea>

                  </div>

                  <div class="col-lg-12">

                    <div class="form-group">

                      <button id="submit" type="submit" class="form-control" name="submit">{{__('Send Message')}}</button>

                    </div>

                  </div>

                </div>

              </form>

          

        </div>

      </div>

      <div class="col-md-4">

        <div class="contact-now">

          <div class="contact"> <span><i class="fa fa-home"></i></span>

            <div class="information"> <strong>{{__('Address')}}:</strong>

              <p>{{widget(1)->extra_field_4}}</p>

            </div>

          </div>

          <!-- Contact Info -->

          <div class="contact"> <span><i class="fa fa-envelope"></i></span>

            <div class="information"> <strong>{{__('Email Address')}}:</strong>

              <p>{{widget(1)->extra_field_2}}</p>

            </div>

          </div>

          <!-- Contact Info -->

          <div class="contact"> <span><i class="fa fa-phone"></i></span>

            <div class="information"> <strong>{{__('Phone No')}}:</strong>

              <p>{{widget(1)->extra_field_3}}</p>

            </div>

          </div>

          <!-- Contact Info --> 

        </div>

      </div>

    </div>

  </div>

</div>



<!-- Clients Logo-->

{{-- <div class="our-clients">

  <div class="container"> 

    

    <!-- Section Title -->

    <div class="section-title">

      <h3>{!!removeTags(widget(16)->extra_field_1)!!}</h3>

      <p>{!!removeTags(widget(16)->description)!!}</p>

    </div>

    <div class="owl-clients owl-carousel">

      @if(null!==(module(9))) 

      @foreach(module(9) as $partner)

      <div class="item"> <img src="{{asset('images/thumb/'.$partner->image)}}" alt=""> </div>

      @endforeach

      @endif

    </div>

  </div>

</div> --}}

<!-- Clients Logo end--> 





 



@endsection

@push('js')

{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{widget(17)->extra_field_1}}&libraries=places"></script>  --}}
{{--  
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{widget(17)->extra_field_1}}&libraries=places"></script>  --}}
{{--  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDtbr0nWYojuUYsziBSrwImxVbWGoXdz8&libraries=places"></script>  --}}
{{--  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg9RZGIRNSbW-qUqnwCO46o6uIjNhXAz8&libraries=places"></script>  --}}

<script type="text/javascript" src="{{asset('js/welcome.js')}}"></script>
@if(session()->has('message.added'))
<script type="text/javascript">
  var msg = '{!! session('message.content' )!!}';
  var url = "{{route('newsletter.post')}}";
</script>
<script type="text/javascript" src="{{asset('js/order.js')}}"></script>
@endif
@endpush

