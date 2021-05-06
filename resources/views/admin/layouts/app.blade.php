<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{__('BlackTie: Admin Panel')}}</title>
    <link rel="icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">
    

      <!-- Google font-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

      <!-- Required Fremwork -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- themify-icons line icon -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">

    <!-- ico font -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/icofont/css/icofont.css')}}">

    <!-- flag icon framework css -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/flag-icon/flag-icon.min.css')}}">

    <!-- Menu-Search css -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/menu-search/css/component.css')}}">

    <!-- C3 chart -->

    <link rel="stylesheet" href="{{asset('admin/bower_components/c3/c3.css')}}" type="text/css" media="all">

    <!-- Data Table Css -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/data-table/css/buttons.dataTables.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css')}}">





    <!-- Style.css -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">

    <!--color css-->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/color/color-1.css')}}" id="color"/>

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/linearicons.css')}}" >

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/simple-line-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/ionicons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">



    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/dashboard/amchart/css/amchart.css')}}">



    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/notification/notification.css')}}">



    <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}" />

    <!-- Multi Select css -->

    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/multiselect/css/multi-select.css')}}" />

    <link href="{{asset('admin/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />

    <link href="{{asset('admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />





    @stack('css')

 

    <script type="text/javascript">

      var base_url = "{!!url('/')!!}"

      var images_limit = 1

    </script>

   </head>

   <body>

      <!-- Pre-loader start -->

      <div class="theme-loader">

         <div class="ball-scale">

            <div></div>

         </div>

      </div>

      <!-- Pre-loader end -->

      <div id="pcoded" class="pcoded">

         <div class="pcoded-overlay-box"></div>

         <div class="pcoded-container navbar-wrapper">

            <!-- TopBar -->

            @include('admin.includes.topbar')

            <!-- End TopBar -->

            <div class="showChat_inner">

               <div class="media chat-inner-header">

                  <a class="back_chatBox">

                  <i class="icofont icofont-rounded-left"></i> {{Auth::guard('admin')->user()->name}}

                  </a>

               </div>

               <div class="media chat-messages">

                  <a class="media-left photo-table" href="#!">

                  <img class="media-object img-circle m-t-5" src="{{asset('admin/assets/images/avatar-1.png')}}" alt="Generic placeholder image">

                  </a>

               </div>

               

               <div class="chat-reply-box p-b-20">

                  <div class="right-icon-control">

                     <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">

                     <div class="form-icon">

                        <i class="icofont icofont-paper-plane"></i>

                     </div>

                  </div>

               </div>

            </div>

            <div class="pcoded-main-container">

               <div class="pcoded-wrapper">

                  @include('admin.includes.sidebar')

                  

                  @yield('content')

               </div>

            </div>

         </div>

      </div>

      <script type="text/javascript" src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/bower_components/tether/dist/js/tether.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- jquery slimscroll js -->

    <script type="text/javascript" src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- modernizr js -->

    <script type="text/javascript" src="{{asset('admin/bower_components/modernizr/modernizr.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>

    <!-- classie js -->

    <script type="text/javascript" src="{{asset('admin/bower_components/classie/classie.js')}}"></script>

    <!-- c3 chart js -->

    <script src="{{asset('admin/bower_components/d3/d3.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/c3/c3.js')}}"></script>

    <!-- google chart -->

    <script type="text/javascript" src="{{asset('admin/assets/js/loader.js')}}"></script>

    <!-- echart js -->

    <script src="{{asset('admin/assets/pages/chart/echarts/js/echarts-all.js')}}" type="text/javascript"></script>

    <!-- data-table js -->

    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

    <script src="{{asset('admin/assets/pages/data-table/js/jszip.min.js')}}"></script>

    <script src="{{asset('admin/assets/pages/data-table/js/pdfmake.min.js')}}"></script>

    <script src="{{asset('admin/assets/pages/data-table/js/vfs_fonts.js')}}"></script>

    <script src="{{asset('admin/assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{asset('admin/assets/pages/data-table/extensions/fixed-header/js/dataTables.fixedHeader.min.js')}}"></script>

    <script src="{{asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>



    



    <!-- i18next.min.js')}} -->

    <script type="text/javascript" src="{{asset('admin/bower_components/i18next/i18next.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/amchart/js/amcharts.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/amchart/js/serial.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/amchart/js/light.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/amchart/js/custom-amchart.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/bower_components/jquery-i18next/jquery-i18next.min.js')}}"></script>

    <!-- Custom js -->

        <script type="text/javascript" src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

    <!-- Multiselect js -->

    <script type="text/javascript" src="{{asset('admin/bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')}}">

    </script>

    <script type="text/javascript" src="{{asset('admin/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/assets/js/jquery.quicksearch.js')}}"></script>

  <!-- Custom js -->

    <script type="text/javascript" src="{{asset('admin/assets/js/script.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/assets/pages/advance-elements/select2-custom.js')}}"></script>

    <script type="text/javascript" src="{{asset('admin/assets/js/script.js')}}"></script>

    <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>

<script src="{{asset('admin/assets/js/demo-12.js')}}"></script>

<script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script src="{{asset('admin/assets/js/jquery.mousewheel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/js/bootstrap-growl.min.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/pages/notification/notification.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/assets/js/dynamic-form.js')}}"></script>

<script type="text/javascript" src="{{asset('js/datatable.js')}}"></script>

@stack('js')

   </body>

</html>