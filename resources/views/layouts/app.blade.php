<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->



    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ widget(1)->extra_field_1 }}</title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <meta name="description" content="Car Rental One Page HTML Template">

    <meta name="keywords" content="one page, html, template, car, car rental, taxi, cab, booking, responsive, business">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <!-- Bootstrap css -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" />



    <!-- Fontawesome css -->

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">



    <!-- Magnific-popup css -->

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">



    <!-- Rev Slider css -->

    <link rel="stylesheet" href="{{ asset('js/revolution-slider/css/settings.css') }}">



    <!-- Owl Carousel css -->

    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">



    <!-- Main css -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('css')


    <script type="text/javascript">
        var base_url = "{!! url('/') !!}"

    </script>

</head>

<body>

    @include('includes.topbar')

    @yield('content')

    @include('includes.footer')

    <!-- Bootstrap -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/popper.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>



    <!-- Popup -->

    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>



    <!-- Carousel -->

    <script src="{{ asset('js/owl.carousel.js') }}"></script>



    <!-- Sticky Header -->

    <script src="{{ asset('js/jquery.sticky.js') }}"></script>



    <!-- Parallax -->

    <script src="{{ asset('js/jquery.parallax.js') }}"></script>



    <!-- Counter -->

    <script src="{{ asset('js/counter.js') }}"></script>

    <script src="{{ asset('js/smoothscroll.js') }}"></script>

    <!-- Revolution Slider -->

    <script type="text/javascript" src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}">
    </script>

    <!-- Custom -->

    <script type="text/javascript" src="{{ asset('admin/assets/js/bootstrap-growl.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>


    @stack('js')

    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elements = document.getElementsByTagName("INPUT");
            for (var i = 0; i < elements.length; i++) {
                elements[i].oninvalid = function(e) {
                    e.target.setCustomValidity("");
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity("Enter your info");
                    }
                };
                elements[i].oninput = function(e) {
                    e.target.setCustomValidity("");
                };
            }
        });
    </script>



</body>

</html>
