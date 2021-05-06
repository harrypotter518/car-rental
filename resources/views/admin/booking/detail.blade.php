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
                  <h4>{{__('Booking Detail')}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>                     
                     <li class="breadcrumb-item">{{__('Booking  Details')}}</li>
                  </ul>
               </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <!-- Task-detail-right start -->
                    <div class="col-xl-6 col-lg-12 task-detail-right">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text"><i class="icofont icofont-ui-note m-r-10"></i> {{__('Personal Details')}} </h5>
                            </div>
                            <div class="card-block task-details">
                                <table class="table table-border table-xs">
                                    <tbody>
                                        <tr>
                                            <td><i class="icofont icofont-contrast"></i> {{__('Name')}}:</td>
                                            <td class="text-right"><span class="f-right"><a> {{$message->name}}</a></span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-email"></i> {{__('Email Address')}}:</td>
                                            <td class="text-right">{{$message->email}}</td>
                                        </tr>

                                        <tr>
                                            <td><i class="icofont icofont-contrast"></i> {{__('Phone Number')}}:</td>
                                            <td class="text-right">{{$message->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-car"></i> {{__('Car')}}:</td>
                                            <td class="text-right"><span class="f-right"><a> {{$message->car_name}}</a></span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-location"></i> {{__('Pick Up')}}:</td>
                                            <td class="text-right">{{$message->pick_up}}</td>
                                        </tr>

                                        <tr>
                                            <td><i class="icofont icofont-contrast"></i> {{__('Pick Up DateTime')}}:</td>
                                            <td class="text-right">{{$message->pick_up_datetime}}</td>
                                        </tr>

                                        <tr>
                                            <td><i class="icofont icofont-id-card"></i> {{__('Drop-Off')}}:</td>
                                            <td class="text-right">{{$message->drop_off}}</td>
                                        </tr>

                                        <tr>
                                            <td><i class="icofont icofont-id-card"></i> {{__('Drop-Off DateTime')}}:</td>
                                            <td class="text-right">{{$message->drop_off_datetime}}</td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>                            
                        </div>
                        
                    </div>
                    <!-- Task-detail-right start -->
                    <!-- Task-detail-left start -->
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="icofont icofont-tasks-alt m-r-5"></i> {{__('Pick Up')}}</h5>
                            </div>
                            <div class="card-block">
                                <div class="">
                                    <div class="m-b-20">
                                        <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags($message->pick_up))}}&output=embed" height="300" width="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                                         
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5><i class="icofont icofont-tasks-alt m-r-5"></i> {{__('Drop-Off')}}</h5>
                            </div>
                            <div class="card-block">
                                <div class="">
                                    <div class="m-b-20">
                                        <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags($message->drop_off))}}&output=embed" height="300" width="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
                                       
                                    </div>                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- Task-detail-left end -->
                </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script src="{{asset('admin/assets/pages/filer/jquery.fileuploadsedit.init.js')}}" type="text/javascript"></script>
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
            title: ' <strong>Created Successfully!</strong> ',
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

$("#title").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);        
});

</script>
@endpush