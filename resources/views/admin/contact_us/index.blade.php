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
                  <h4>{{__('Messages List')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     
                     <li class="breadcrumb-item">{{__('Messages List')}}
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
                                    <th>{{__('Email')}}</th>
                                    <th>{{__('Dated')}}</th>
                                    <th>{{__('Action')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if(null!==($messages))
                                 @foreach($messages as $data)
                                 <tr>
                                    <td>{{$data->first_name}} {{$data->last_name}}</td>

                                    <td>{{$data->email_address}}</td>
                                    
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)}}</td>
                                    <td>
                                      <a href="{{route('admin.contact-us-detail',[$data->id])}}" class="tabledit-edit-button btn btn-primary waves-effect waves-light"><span class="icofont icofont-eye-alt"></span> {{__('View Detail')}}</a>
                                      
                                      
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
<script type="text/javascript">
   @if(session()->has('message.added'))
               
       
       $(document).ready(function() {
      
       /*--------------------------------------
            Notifications & Dialogs
        ---------------------------------------*/
       /*
        * Notifications
        */
       function notify(from, align, icon, type, animIn, animOut){
           $.growl({
               icon: icon,
               title: ' <strong>Task Done!</strong> ',
               message: "{!! session('message.content') !!}",
               url: ''
           },{
               element: 'body',
               type: type,
               allow_dismiss: true,
               placement: {
                   from: from,
                   align: align
               },
               offset: {
                   x: 30,
                   y: 30
               },
               spacing: 10,
               z_index: 999999,
               delay: 2500,
               timer: 1000,
               url_target: '_blank',
               mouse_over: false,
               animate: {
                   enter: animIn,
                   exit: animOut
               },
               icon_type: 'class',
               template: '<div data-growl="container" class="alert" role="alert">' +
               '<button type="button" class="close" data-growl="dismiss">' +
               '<span aria-hidden="true">&times;</span>' +
               '<span class="sr-only">Close</span>' +
               '</button>' +
               '<span data-growl="icon"></span>' +
               '<span data-growl="title"></span>' +
               '<span data-growl="message"></span>' +
               '<a href="#" data-growl="url"></a>' +
               '</div>'
           });
       };
   
       
   
           var nFrom = 'top';
           var nAlign = 'right';
           var nIcons = $(this).attr('data-icon');
           var nType = 'success';
           var nAnimIn = 'animated flipInY';
           var nAnimOut = 'animated flipOutY';
   
           notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
   
   });
   @endif
   function update_status(id) {
        var current_status = $("#sts_" + id + " span").html();
        $.ajax({
            type: 'GET',
            url: '{{url("/admin")}}/data-status/' + id + '/' + current_status,
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(sts) {
                var class_label = 'success';
                if (sts != 'active')
                    var class_label = 'warning';
                $("#sts_" + id).html('<span class="btn btn-' + class_label + '">' + sts + '</span>');
            }
        });

    }
</script>
@endpush