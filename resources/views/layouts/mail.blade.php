<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ widget(1)->extra_field_1 }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}" />

    @stack('css')
    <script type="text/javascript">
      var base_url = "{!!url('/')!!}"
    </script>
   </head>
   <body>
   	@yield('content')
   	<!-- Bootstrap --> 
	<script src="{{asset('js/jquery.min.js')}}"></script> 
	<script src="{{asset('js/bootstrap.min.js')}}"></script> 
	@stack('js')
   </body>
</html>