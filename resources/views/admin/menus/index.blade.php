@extends('admin.layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('/admin/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admin/menu/css/nestable.css') }}">

<link rel="stylesheet" href="{{ asset('/admin/menu/css/menu.css') }}">
@endpush
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <?php 
      $menu_types = App\Models\Menu_types::where('status','active')->get();

        $menu= new App\Models\Menu;
         ?> 
      @if(null!==($menu_types))
      @foreach($menu_types as $type)
      <div class="main-body">
         <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
               <div class="page-header-title">
                  <h4>{{$type->title}}</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                    
                     <li class="breadcrumb-item">{{$type->title}} List
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
                          <div class="dd" id="nestable">
                           {!!$menu->getHTML(App\Models\Menu::where('menu_type_id',$type->id)->orderBy('order')->get())!!}
                         </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body end -->
         </div>
      </div>
      @endforeach

      @endif
   </div>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{ asset('/admin/toastr/toastr.min.js') }}"></script>
 <script src="{{ asset('/admin/menu/js/jquery.nestable.js') }}"></script>
 <script src="{{ asset('/admin/menu/js/menu.js') }}"></script>
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

   
</script>
@endpush