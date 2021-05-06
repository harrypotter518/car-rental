<nav class="navbar header-navbar pcoded-header" header-theme="theme4" pcoded-header-position="fixed">
   <div class="navbar-wrapper">
      <div class="navbar-logo">
         <a class="mobile-menu" id="mobile-collapse" href="#!">
         <i class="ti-menu"></i>
         </a>
        
         <a href="{{url('/admin')}}">
         <img src="{{asset('images/'.widget(1)->extra_image_1)}}" width="20%" alt="logo">
         </a>
         <a class="mobile-options">
         <i class="ti-more"></i>
         </a>
      </div>
      <div class="navbar-container container-fluid">
         <div>
            <ul class="nav-left">
               <li>
                  <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
               </li>
               
               <li>
                  <a href="#!" onclick="javascript:toggleFullScreen()">
                  <i class="ti-fullscreen"></i>
                  </a>
               </li>
               
            </ul>
            <ul class="nav-right">
               
               <li class="header-notification">
                  <a href="{{route('admin.contact-us-messages')}}">
                  <i class="ti-bell"></i>
                  @if(messages_count())
                  <span class="badge">{{messages_count()}}</span>
                  @endif
                  </a>
                  <ul class="show-notification">
                      @if(null!==(messages()))
                      <li>
                        <h6>Notifications</h6>
                        <label class="label label-danger">{{__('New')}}</label>
                     </li>
                    
                     @foreach(messages() as $mes)
                     <li>
                        <div class="media">
                           <img class="d-flex align-self-center" src="{{asset('admin/assets/images/user.png')}}" alt="Generic placeholder image">
                           <div class="media-body">
                              <h5 class="notification-user">{{$mes->first_name}} {{$mes->last_name}}</h5>
                              <p class="notification-msg">{!!\Illuminate\Support\Str::limit(strip_tags($mes->message), 50, '...')!!}</p>
                              <span class="notification-time">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mes->created_at)->diffForHumans() }} ago</span>
                           </div>
                        </div>
                     </li>
                     @endforeach
                     @endif
                     
                  </ul>
               </li>
              
               <li class="user-profile header-notification">
                  <a href="#!">
                  <img src="{{asset('admin/assets/images/user.png')}}" alt="User-Profile-Image">
                  <span>{{Auth::guard('admin')->user()->name}}</span>
                  <i class="ti-angle-down"></i>
                  </a>
                  <ul class="show-notification profile-notification">
                     
                     <li>
                        
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ti-layout-sidebar-left"></i> {{__('Logout')}}
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                     </li>
                  </ul>
               </li>
            </ul>
            <!-- search -->
            
            <!-- search end -->
         </div>
      </div>
   </div>
</nav>