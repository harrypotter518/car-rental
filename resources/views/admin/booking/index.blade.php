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

                  <h4>{{__('Booking List')}}</h4>

               </div>

               <div class="page-header-breadcrumb">

                  <ul class="breadcrumb-title">

                     <li class="breadcrumb-item">

                        <a href="{{url('/')}}">

                        <i class="icofont icofont-home"></i>

                        </a>

                     </li>                    

                     <li class="breadcrumb-item">{{__('Booking List')}}

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

                       

                        <div class="card-block">

                           <div class="dt-responsive table-responsive">

                              <table id="fix-header" class="table table-striped table-bordered nowrap dataTable">

                              <thead>

                                 <tr>

                                    <th>{{__('Name')}}</th>

                                    <th>{{__('Car Name')}}</th>

                                    <th>{{__('Pick-Up')}}</th>

                                    <th>{{__('Action')}}</th>

                                 </tr>

                              </thead>

                              <tbody>

                                 @if(null!==($messages))

                                 @foreach($messages as $data)

                                 <tr>

                                    <td>{{$data->name}}</td>



                                    <td>{{$data->car_name}}</td>

                                    

                                    <td>{{$data->pick_up}}</td>

                                    <td>

                                      <a href="{{route('admin.booking-detail',[$data->id])}}" class="tabledit-edit-button btn btn-primary waves-effect waves-light"><span class="icofont icofont-eye-alt"></span>&nbsp View Detail</a>
                                       <a href="{{route('admin.booking-destroy',[$data->id])}}" class="tabledit-delete-button btn btn-danger waves-effect waves-light"><span class="icofont icofont-ui-delete"></span>&nbsp {{__('Delete')}}</a>

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