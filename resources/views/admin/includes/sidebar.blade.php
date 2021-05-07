<nav class="pcoded-navbar" pcoded-header-position="relative">

    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>

    <div class="pcoded-inner-navbar main-menu">

        <div class="">

            <div class="main-menu-header">

                <img class="img-40" src="{{ asset('admin/assets/images/user.png') }}" alt="User-Profile-Image">

                <div class="user-details">

                    <span>{{ Auth::guard('admin')->user()->name }}</span>

                </div>

            </div>

            <div class="main-menu-content">

                <ul>
                    <li class="more-details">

                        <a href="#!"><i class="ti-layout-sidebar-left"></i>{{ __('Logout') }}</a>

                    </li>

                </ul>

            </div>

        </div>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5">
            {{ __('Navigation') }}</div>

        <ul class="pcoded-item pcoded-left-item">

            <li class=" ">

                <a href="{{ url('/admin/home') }}" data-i18n="nav.form-wizard.main">

                    <span class="pcoded-micon"><i class="ti-home"></i></span>

                    <span class="pcoded-mtext">{{ __('Dashboard') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

            </li>



            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)" data-i18n="nav.navigate.main">

                    <span class="pcoded-micon"><i class="ti-cloud-up"></i></span>

                    <span class="pcoded-mtext">{{ __('Admins') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.admins') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Admins') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.admin.add') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Admin') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li>

            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)" data-i18n="nav.navigate.main">

                    <span class="pcoded-micon"><i class="ti-cloud-up"></i></span>

                    <span class="pcoded-mtext">{{ __('Slider') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'slider') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Slide Images') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'slider') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Slide Image') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li>



            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)" data-i18n="nav.navigate.main">

                    <span class="pcoded-micon"><i class="ti-car"></i></span>

                    <span class="pcoded-mtext">{{ __('Our Cars') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'our-cars') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List of Cars') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'our-cars') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Car') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>
                    </li>
                </ul>
            </li>





            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)" data-i18n="nav.navigate.main">

                    <span class="pcoded-micon"><i class="ti-car"></i></span>

                    <span class="pcoded-mtext">{{ __('Bookings') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ url('admin/booking') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List of Bookings') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li>



            {{-- <li class="pcoded-hasmenu">

                <a href="javascript:void(0)" data-i18n="nav.navigate.main">

                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>

                    <span class="pcoded-mtext">{{ __('Blogs') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'blogs') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Blogs') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'blogs') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Blog') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>



                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'blog-categories') }}"
                            data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Blog Categories') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'blog-categories') }}"
                            data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Category') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>





                </ul>

            </li>

            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)">

                    <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>

                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{ __('Services') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'services') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Services') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'services') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Service') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li>



            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)">

                    <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i></span>

                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{ __('Our Experts') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'our-experts') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Our Experts') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'our-experts') }}"
                            data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Expert') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li>



            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)">

                    <span class="pcoded-micon"><i class="ti-comments"></i></span>

                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{ __('Testimonials') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'testimonials') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Testimonials') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'testimonials') }}"
                            data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Testimonial') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li>



            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)">

                    <span class="pcoded-micon"><i class="ti-headphone-alt"></i></span>

                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{ __('Partners') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.modules.data', 'partners') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Partners') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.modules.data.add', 'partners') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Partner') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li> --}}





            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)">

                    <span class="pcoded-micon"><i class="ti-menu-alt"></i></span>

                    <span class="pcoded-mtext" data-i18n="nav.page_layout.main">{{ __('Site Menus') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <li class=" ">

                        <a href="{{ route('admin.menus') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('List Menus') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                    <li class=" ">

                        <a href="{{ route('admin.menus.add') }}" data-i18n="nav.navigate.navbar">

                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                            <span class="pcoded-mtext">{{ __('Add New Menu') }}</span>

                            <span class="pcoded-mcaret"></span>

                        </a>

                    </li>

                </ul>

            </li>



            <li class="pcoded-hasmenu">

                <a href="javascript:void(0)" data-i18n="nav.navigate.main">

                    <span class="pcoded-micon"><i class="ti-settings"></i></span>

                    <span class="pcoded-mtext">{{ __('Settings') }}</span>

                    <span class="pcoded-mcaret"></span>

                </a>

                <ul class="pcoded-submenu">

                    <?php $w_pages = App\Models\WidgetPages::where('status', 'active')->get(); ?>

                    @if (null !== $w_pages)

                        @foreach ($w_pages as $w_p)

                            <li class=" ">

                                <a href="{{ route('admin.widgets_data', $w_p->slug) }}"
                                    data-i18n="nav.navigate.navbar">

                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>

                                    <span class="pcoded-mtext">{{ $w_p->title }}</span>

                                    <span class="pcoded-mcaret"></span>

                                </a>

                            </li>

                        @endforeach

                    @endif

                </ul>

            </li>



        </ul>



    </div>

</nav>
