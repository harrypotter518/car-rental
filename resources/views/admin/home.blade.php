sdadasdasssssssssssssss
@extends('admin.layouts.app')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>{{ widget(1)->extra_field_1 }} {{ __('Dashboard') }}</h4>
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/admin') }}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">{{ __('Dashboard') }}
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <!-- counter-card-1 start-->

                            <!-- counter-card-1 end-->
                            <!-- counter-card-2 start -->
                            <div class="col-md-6 col-xl-4">
                                <div class="card counter-card-2">
                                    <div class="card-block-big">
                                        <div>
                                            <h3>{{ count(module(5)) }}</h3>
                                            <p>{{ __('Cars') }}
                                                <span class="f-right text-success">
                                                    <i class="icofont icofont-arrow-up"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <i class="ti-car"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- counter-card-2 end -->
                            <div class="col-md-12 col-xl-4">
                                <div class="card counter-card-1">
                                    <div class="card-block-big">
                                        <div>
                                            {{-- <h3>{{ $booking }}</h3> --}}
                                            <p>{{ __('New Bookings') }}
                                                <span class="f-right text-primary">
                                                    <i class="icofont icofont-arrow-up"></i>
                                                </span>
                                            </p>

                                        </div>
                                        <i class="ti-car"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- counter-card-3 start -->
                            {{-- <div class="col-md-6 col-xl-4">
                                <div class="card counter-card-3">
                                    <div class="card-block-big">
                                        <div>
                                            <h3>{{ $messages }}</h3>
                                            <p>{{ __('New Messages') }}
                                                <span class="f-right text-default">
                                                    <i class="icofont icofont-arrow-down"></i>
                                                </span>
                                            </p>

                                        </div>
                                        <i class="icofont icofont-comment"></i>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- counter-card-3 end -->


                        </div>


{{-- 
                        <ul class="row dashnav">
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ url('/admin') }}"
                                    class="waves-effect waves-light"><i class="ti-dashboard"></i><span>
                                        {{ __('Dashboard') }} </span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.modules.data', 'slider') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-blackboard"></i><span>{{ __('Slider') }}</span></a> </li>

                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.modules.data', 'our-cars') }}"
                                    class="waves-effect waves-light"><i class="ti-package"></i><span> {{ __('Our Cars') }}
                                    </span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ url('admin/booking') }}"
                                    class="waves-effect waves-light"><i class="ti-desktop"></i><span> {{ __('Bookings') }}
                                    </span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.modules.data', 'blogs') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-files"></i><span>{{ __('Blog') }}</span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.modules.data', 'services') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-layout-list-thumb-alt"></i><span>{{ __('Services') }}</span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.modules.data', 'our-experts') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-gallery"></i><span>{{ __('Our Experts') }}</span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.modules.data', 'testimonials') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-layout-grid2"></i><span>{{ __('Testimonials') }}</span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.modules.data', 'partners') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-pencil-alt"></i><span>{{ __('Partners') }}</span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.menus') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-menu-alt"></i><span>{{ __('Site Menus') }}</span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ url('admin/site-settings') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-settings"></i><span>{{ __('Site Settings') }}</span></a> </li>
                            <li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.logout') }}"
                                    class="waves-effect waves-light"><i
                                        class="ti-user"></i><span>{{ __('Logout') }}</span></a> </li>
                        </ul> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript" src="{{ asset('admin/assets/pages/dashboard/ecommerce-dashboard.js') }}"></script>
@endpush
