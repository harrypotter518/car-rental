@extends('layouts.app')

@section('content')
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{__('Testimonials')}}</h1>
  </div>
</div>
<!-- Inner Heading End -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Testimonials Start -->
    @if(null!==(module(5)))
<!-- Testimonials Start -->
<div class="testimonials-wrap ">
  <div class="container">
    <ul class="row  unorderList">
      @foreach(module(5) as $testimoinial)
      <li class="col-lg-6 ">
          <div class="testimonials_sec">
            <div class="client_box">
              <div class="clientImg"><img alt="" src="{{asset('images/thumb/'.$testimoinial->image)}}"></div>
              <ul class="unorderList starWrp">
                <?php if($testimoinial->extra_field_2 == 5){?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2 == 4){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2 == 3){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==2){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==1){ ?>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php }else if($testimoinial->extra_field_2==0){ ?>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
                  <li><i class="far fa-star"></i></li>
              <?php } ?>
              </ul>
            </div>
            {!!$testimoinial->description!!}
            <h3>{{$testimoinial->title}} <span>{{$testimoinial->extra_field_1}}</span></h3>
            <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
          </div>
        </li>
      
      @endforeach
    </ul>
  </div>
</div>
@endif
    
    <!-- Testimonials End --> 
    
  </div>
</div>




 

@endsection
