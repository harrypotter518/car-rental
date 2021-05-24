@extends('admin.layouts.app')
@section('content')

<style>
    td{
        white-space:pre-line; 
        {{--  word-break: break-all;  --}}
    }
</style>

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
                                        
                                        <tr>
                                            <td><i class="icofont icofont-id-card"></i> {{__('Drop-Off DateTime')}}:</td>
                                            <td class="text-right">{{$message->country}}</td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>                            
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text"><i class="icofont icofont-ui-note m-r-10"></i> {{__('Add following products')}} </h5>
                            </div>
                            <div class="card-block task-details">
                                <table class="table table-border table-xs">
                                    <tbody>
                                        @if($message->following_product_1 == "on")
                                            <tr>
                                                <td class="text-left"><i class="icofont icofont-contrast"></i> {{__('Prepaid gas')}}</td>
                                            </tr>
                                        @endif 
                                        
                                        @if($message->following_product_2 == "on")
                                            <tr>
                                                <td class="text-left"><i class="icofont icofont-contrast"></i> {{__('Car wash')}}</td>
                                            </tr>
                                        @endif 

                                        @if($message->following_product_3 == "on")
                                            <tr>
                                                <td class="text-left"><i class="icofont icofont-contrast"></i> {{__('iphone charger')}}</td>
                                            </tr>
                                        @endif 

                                        @if($message->following_product_4 == "on")
                                            <tr>
                                                <td class="text-left"><i class="icofont icofont-contrast"></i> {{__('Android charger')}}</td>
                                            </tr>
                                        @endif 

                                        @if($message->following_product_5 != null)
                                            <tr>
                                                <td class="text-left">
                                                    <i class="icofont icofont-contrast"></i>Delivery (we will deliver your shiny new vehicle to your desired location within 30 miles of Chicago)
                                                    <br>&emsp; a. 100 dollars
                                                    <br>&emsp; Address:{{$message->following_product_5}}
                                                </td>
                                            </tr>
                                        @endif 

                                         @if($message->following_product_6 != null)
                                            <tr>
                                                <td class="text-left">
                                                    <i class="icofont icofont-contrast"></i>Pick up (we will pick up the vehicle from your desired location within 30 miles of Chicago)
                                                    <br>&emsp; a. 100 dollars
                                                    <br>&emsp;  PIck up same as delivery:{{$message->following_product_6}}
                                                </td>
                                            </tr>
                                        @endif 
                                    </tbody>
                                </table>
                            </div>                            
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text"><i class="icofont icofont-ui-note m-r-10"></i> {{__('Add insurances')}} </h5>
                            </div>
                            <div class="card-block task-details">
                                <table class="table table-border table-xs">
                                    <tbody>
                                        @if($message->insurance_1 != null)
                                        <?php
                                            $str = explode(",", $message->insurance_1 );                                            
                                        ?>
                                            <tr>
                                                <td class="text-left">
                                                    <i class="icofont icofont-contrast"></i> I have my own physical damage and liability insurance, for example, through my credit card company
                                                    <br> &emsp; Company Name : {{ $str[0] }}
                                                    <br> &emsp; Policy Number : {{ $str[1] }}
                                                </td>
                                            </tr>
                                        @endif 
                                        
                                        @if($message->insurance_2 == "on")
                                            <tr>
                                                <td class="text-left">
                                                    <i class="icofont icofont-contrast"></i>I have liability insurance but would like to buy comprehensive physical damage insurance for peace of mind
                                                    <br>&emsp; a. 18 dollars/day
                                                </td>
                                            </tr>
                                        @endif 

                                        @if($message->insurance_3 == "on")
                                            <tr>
                                                <td class="text-left">
                                                    <i class="icofont icofont-contrast"></i>3. I do not have liability or physical damage insurance to my knowledge
                                                    <br>&emsp; a. Automatic response: unfortunately we cannot rent cars to drivers without liability insurance
                                                </td>
                                            </tr>
                                        @endif 
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
                                <h5 class="card-header-text"><i class="icofont icofont-ui-note m-r-10"></i> {{__('Payment')}} </h5>
                            </div>
                            <div class="card-block task-details">
                                <table class="table table-border table-xs">
                                    <tbody>
                                        <tr>
                                            <td><i class="icofont icofont-id-card"></i> {{__('Address')}}:</td>
                                            <td class="text-right"><span class="f-right"><a> {{$message->address}}</a></span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-location"></i> {{__('City')}}:</td>
                                            <td class="text-right">{{$message->city}}</td>
                                        </tr>

                                        <tr>
                                            <td><i class="ti-location"></i> {{__('State')}}:</td>
                                            <td class="text-right">{{$message->state}}</td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-location"></i> {{__('Country')}}:</td>
                                            <td class="text-right"><span class="f-right"><a> {{$message->country}}</a></span></td>
                                        </tr>                                    

                                        <tr>
                                            <td><i class="icofont icofont-contrast"></i> {{__('Payment method')}}:</td>
                                            @if ($message->payment_method == "COD")
                                                <td class="text-right">Cash on Delivery</td>
                                            @else
                                                <td class="text-right">Paypal</td>
                                            @endif
                                        </tr>

                                        <tr>
                                            <td><i class="icofont icofont-id-card"></i> {{__('Total Budget')}}:</td>
                                            <td class="text-right">{{$message->grand_total}} US$</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                            
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="icofont icofont-tasks-alt m-r-5"></i> {{__('Pick Up')}}</h5>
                            </div>
                            <div class="card-block">
                                <div class="">
                                    <div class="m-b-20">
                                        <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags($message->pick_up))}}&output=embed" height="400" width="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                                         
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
                                        <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags($message->drop_off))}}&output=embed" height="400" width="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
                                       
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