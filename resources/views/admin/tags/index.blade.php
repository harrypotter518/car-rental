@extends('admin.layouts.app')

@section('content')

<div class="pcoded-content">

   <div class="pcoded-inner-content">

      <!-- Main-body start -->

      <div class="main-body">

         <div class="page-wrapper">

            <!-- Page header start -->

            <div class="page-header">

               <div class="page-header-title">

                  <h4>{{__('Tags List')}}</h4>

               </div>

               <div class="page-header-breadcrumb">

                  <ul class="breadcrumb-title">

                     <li class="breadcrumb-item">

                        <a href="{{url('/admin')}}">

                        <i class="icofont icofont-home"></i>

                        </a>

                     </li>

                     

                     <li class="breadcrumb-item">{{__('Tags List')}}

                     </li>

                  </ul>

               </div>

            </div>

            <!-- Page header end -->

            <!-- Page body start -->

            <div class="page-body">

               <div class="row">

                  <div class="col-sm-12">

                     <!-- Basic Form Inputs card start -->

                     <div class="card">

                        

                        <div class="card-block table-border-style">

                           <div class="table-responsive">

                              <table class="table table-bordered">

                              <thead>

                                 <tr>

                                    <th>{{__('Tag Name')}}</th>

                                    <th>{{__('Tag Slug')}}</th>

                                    <th>{{__('Action')}}</th>

                                 </tr>

                              </thead>

                              <tbody>

                                 @if($tags)

                                 @foreach($tags as $tag)

                                 <tr>

                                    <td>{{$tag->title}}</td>

                                    <td>{{$tag->slug}}</td>

                                    <td>

                                       <a class="btn btn-success" href="{{route('admin.tags.edit',$tag->id)}}" role="button">{{__('Edit')}}</a>

                                       <a class="btn btn-danger delete" href="{{route('admin.tags.delete',$tag->id)}}" role="button">{{__('Delete')}}</a>

                                    </td>

                                 </tr>

                                 @endforeach

                                 @endif

                              </tbody>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <!-- Page body end -->

         </div>

      </div>

   </div>

</div>

@endsection

@push('js')

@if(session()->has('message.added'))

<script type="text/javascript">

  var msg = '{!! session('message.content' )!!}';

</script>

<script type="text/javascript" src="{{asset('js/order.js')}}"></script>

@endif

@endpush