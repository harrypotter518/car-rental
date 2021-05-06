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

                  <h4>{{$module->name}} {{__('List')}}</h4>

               </div>

               <div class="page-header-breadcrumb">

                  <ul class="breadcrumb-title">

                     <li class="breadcrumb-item">

                        <a href="{{url('/admin')}}">

                        <i class="icofont icofont-home"></i>

                        </a>

                     </li>

                      <li class="breadcrumb-item">{{$module->name}} {{__('List')}}

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

                                    @if($module->is_image)

                                    <th>{{__('Image')}}</th>

                                    @endif

                                    <th>{{__('Title')}}</th>

                                    <th>{{__('Created Date')}}</th>

                                    <th>{{__('Status')}}</th>

                                    <th>{{__('Action')}}</th>

                                 </tr>

                              </thead>

                              <tbody>

                                 @if($module->modules_data)

                                 @foreach($module->modules_data as $data)

                                 <tr>

                                    @if($module->is_image)

                                    <td width="12%""><img src="{{asset('/images/thumb/'.$data->image)}}" alt=""></td>

                                    @endif

                                    <td>{{$data->title}}</td>

                                    

                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)}}</td>

                                    <td><a class="waves-effect status waves-light" onclick="update_status({{$data->id}});" href="javascript:void(0);" id="sts_{{$data->id}}">@if($data->status=='active')<span class="btn btn-success">{{$data->status}}</span>@else <span class="btn btn-warning">{{$data->status}}</span> @endif </a></td>

                                    <td>

                                      <a href="{{route('admin.modules.data.edit',[$module->slug,$data->id])}}" class="tabledit-edit-button btn btn-primary waves-effect waves-light"><span class="icofont icofont-ui-edit"></span>&nbsp {{__('Edit')}}</a>

                                      

                                       <a href="{{route('admin.modules.data.delete',[$module->slug,$data->id])}}" class="tabledit-delete-button btn btn-danger waves-effect waves-light"><span class="icofont icofont-ui-delete"></span>&nbsp {{__('Delete')}}</a>

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
<script type="text/javascript" src="{{asset('admin/assets/js/update_status.js')}}"></script>

@endpush