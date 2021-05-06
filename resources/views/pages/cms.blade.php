@extends('layouts.app')

@section('content')
<!-- Inner Heading Start -->
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{$cms->title}}</h1>
  </div>
</div>
<!-- About Start -->
<?php $class="12"; if($cms->image!='' && null!==($cms->image)){
  $class = '5';
} ?>
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      @if($cms->image!='' && null!==($cms->image))
      <div class="col-lg-7">
        <div class="aboutImg"><img src="{{asset('images/'.$cms->image)}}" alt=""></div>
      </div>
      @endif
      <div class="col-lg-5">
        <div class="about_box">
          <div class="title">
            <h1>{{$cms->title}}</h1>
          </div>
          <p>{!!$cms->description!!}</p>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End --> 

@endsection

