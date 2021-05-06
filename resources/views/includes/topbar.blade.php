<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light"> 
            <a class="navbar-brand" href="{{ url('/') }}">
              {{-- Car<span>Rental</span> --}}
              <img src="/images/logo_a.jpg" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> 
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="close-toggler" type="button" data-toggle="offcanvas">
                    <span><i class="fas fa-times-circle" aria-hidden="true"></i></span>
                </button>
                <ul class="navbar-nav mr-auto" style="padding-left:30vw">
                    {!! removeTags(get_menus(1)) !!}
                    <li class="nav-item"><span class="calltxt" style="float:right"><i class="fa fa-phone" aria-hidden="true"></i>
                            {{ widget(1)->extra_field_3 }}</span></li>
                </ul>
            </div>
        </nav>

        <!-- NAVBAR HEADER -->

    </div>
</div>
