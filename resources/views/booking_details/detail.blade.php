@extends('layouts.app')



@section('content')



<!-- Inner Heading Start -->



<!-- Page Title start -->



<div class="pageTitle">



  <div class="container">



    



        <h1 class="page-heading">{{$blog->title}}</h1>



     



  </div>



</div>







<?php 



                $cate_ids = explode(",", $blog->category_ids);



                $categories = App\Models\ModulesData::whereIn('id', $cate_ids)->where('status','active')->get();







              $cate_array = array();



              foreach ($categories as $cat) {



                  $cate_array[] = "<a href='" . route('blogs.list','cate='.$cat->id) . "'>$cat->title</a>";



              }  



            ?>



<!-- Page Title End -->



<div class="innercms">



  <div class="container"> 



    



    <!-- Blog start -->



    <div class="row">



      <div class="col-md-8"> 



        <!-- Blog List start -->



        <div class="blogWraper">



          <div class="blogList blogdetailbox">



            <div class="postimg"><img src="{{asset('images/'.$blog->image)}}" alt="{{$blog->title}}"> </div>



            <div class="post-header margin-top30">



              <h4><a>{{$blog->title}}</a></h4>



              <div class="postmeta">By : <span>Admin </span> Category : {!!implode(', ',$cate_array)!!}</div>



              <div class="date"> {{date('M d, Y',strtotime($blog->created_at))}}</div>



            </div>



            {!!removeTags($blog->description)!!}



            



            



          </div>



      



        </div>



      </div>



      <div class="col-md-4"> 



        <!-- Side Bar -->



       <div class="sidebar"> 



          <!-- Search -->



          <div class="widget">



            <h5 class="widget-title">{{__('Search')}}</h5>



            <div class="search">



              <form action="{{route('blogs.list')}}" class="sidebar-search-form">



                <input type="text" class="form-control" name="keyword" placeholder="{{__('Search')}}">



                <button type="submit" class="btn"><i class="fa fa-search"></i></button>



              </form>



            </div>



          </div>



          <!-- Categories -->



          @if(null!==(module(2))) 



          <div class="widget">



            <h5 class="widget-title">{{__('Categories')}}</h5>



            <ul class="categories">



               @foreach(module(2) as $cate)



               <?php 



               $count = App\Models\ModulesData::where('module_id',3)->whereRaw("FIND_IN_SET($cate->id,category_ids)")->where('status','active')->count();



                ?>



              <li><a href="{{route('blogs.list','cate='.$cate->id)}}">{{$cate->title}} <span>{{$count}}</span></a></li>



              @endforeach



            </ul>



          </div>



          @endif



          <!-- Recent Posts -->



          @if(null!==($recent_data)) 



          <div class="widget">



            <h5 class="widget-title">{{__('Recent Posts')}}</h5>



            <ul class="papu-post">



               @foreach($recent_data as $recent)



               <li>



                <div class="media-left"> <a href="{{route('blogs.detail',$recent->slug)}}"><img src="{{asset('images/thumb/'.$recent->image)}}" alt="{{$recent->title}}"></a> </div>



                <div class="media-body"> <a class="media-heading" href="{{route('blogs.detail',$recent->slug)}}">{{$recent->title}}</a> <span>{{date('M d, Y',strtotime($recent->created_at))}}</span> </div>



              </li>



              @endforeach



            </ul>



          </div>



          @endif



          



          <!-- Archives Posts -->



           @if(null!==($archives) && count($archives))



          <div class="widget">



            <h5 class="widget-title">{{__('Archives')}}</h5>



            <ul class="archive">



              @foreach($archives as $archive)



              @php



              $date = date('Y-m',strtotime($archive));



              @endphp



              <li><a href="{{route('blogs.list','archive='.$date)}}">{{$archive}} </a></li>



              @endforeach



            </ul>



          </div>



          @endif



        



        </div>



      </div>



    </div>



  </div>



</div>



<!-- Inner Heading End --> 



<!-- Inner Content Start -->







<!-- Inner Content Start --> 



<!-- Inner Content Start --> 



@endsection



@push('js')

<script type="text/javascript" src="{{asset('js/moving.js')}}"></script>

@endpush