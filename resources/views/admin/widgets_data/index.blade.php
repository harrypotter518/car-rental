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

                  <h4>{{$page->title}}</h4>

               </div>

               <div class="page-header-breadcrumb">

                  <ul class="breadcrumb-title">

                     <li class="breadcrumb-item">

                        <a href="{{url('/admin')}}">

                        <i class="icofont icofont-home"></i>

                        </a>

                     </li>

                     <li class="breadcrumb-item">{{$page->title}}  {{__('Components')}}

                     </li>

                    

                  </ul>

               </div>

            </div>

            <!-- Page header end -->

            <!-- Page body start -->

            @if(null!==($widgets))

            @foreach($widgets as $wid)

            <?php $widget_data = null; ?>

            <div class="page-body" id="widget_{{$wid->id}}" style="padding: 30px;">

               <div class="row">

                  <div class="col-sm-12">

                     <!-- Basic Form Inputs card start -->

                     <div class="card">

                      <div class="card-header">

                           <h5>{{$wid->title}}</h5>

                           

                        </div>

                        <div class="card-block">

                           <h4 class="sub-title">{{$wid->title}} {{__('Inputs')}}</h4>

                           <?php 



                              $widget_data = App\Models\WidgetsData::where('widget_id',$wid->id)->first()

                            ?>

                          @if(null!==($widget_data))

                          {!! Form::model($widget_data, array('method' => 'post', 'route' => array('admin.widget_data.store',$wid->id), 'class' => 'form', 'files'=>true)) !!}

                           

                          @else

                          {!! Form::open(array('method' => 'post', 'route' => array('admin.widget_data.store',$wid->id), 'class' => 'form', 'files'=>true)) !!}

                           

                          @endif

                           {!! Form::hidden('id', $wid->id) !!}

                           @include('admin.widgets_data.inc.form')

                           <div class="row">

                              <div class="col-md-5"></div>

                              <div class="col-md-4"><button type="submit" class="btn btn-primary">{{__('Update')}}</button></div>

                           </div>



                           {!! Form::close() !!}

                           

                        </div>



                     </div>

                  </div>

               </div>

            </div>

            @endforeach

            @endif

            <!-- Page body end -->

         </div>

      </div>

   </div>

</div>

@endsection

@push('js')



@include('admin.widgets_data.widgetfiler')

@include('admin.widgets_data.dynamic_form')





@if(session()->has('message.added'))

<script type="text/javascript">

  var msg = '{!! session('message.content' )!!}';

</script>

<script type="text/javascript" src="{{asset('js/order.js')}}"></script>

@endif

@endpush