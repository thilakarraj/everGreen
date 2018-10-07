<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>




    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!-- font icons-->
    <link rel="stylesheet" href="{{ asset('icons/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/extensions/pace.css') }}"> -->

    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vertical-overlay-menu.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="menu-collapsed vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-shadow">
      <div class="navbar-wrapper">
        <!-- <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs">
              <i class="fas fa-bars fa-lg"></i></a></li>
            <li class="nav-item"><img alt="branding logo" src="logo/logo.png"  class="brand-logo"></li>
            <li class="nav-item hidden-md-up float-xs-right">
              <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
                <i class="fas fa-ellipsis-v"></i>

              </a>
            </li>
          </ul>
        </div> -->

        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active">
              <i class="fas fa-bars fa-2x"></i></a></li>
            <li class="nav-item"><a href="{{ url('/') }}" class="navbar-brand nav-link"><img alt="branding logo" src="{{ asset('logo/logo-customer.png') }}" data-expand="{{ asset('logo/logo-customer.png') }}" data-collapse="{{ asset('logo/logo-customer.png') }}" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
              <i class="fas fa-ellipsis-v"></i></a></li>
          </ul>
        </div>

        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down">
                <a class="nav-link nav-menu-main menu-toggle hidden-xs">
                
                <i class="icon-navicon2"></i>
                </a></li>
              <li class="nav-item hidden-sm-down">
                <a href="#" class="nav-link nav-link-expand">
                  <i class="ficon icon-expand2"></i>
                </a>
              </li>             
            </ul>
            <ul class="nav navbar-nav float-xs-right">
               
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                <i class="far fa-bell fa-lg"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span> </h6>
                  </li>
                
                 
                </ul>
              </li>
               
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"> </span><span class="user-name">Senthil kumar R</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a>
                  <div class="dropdown-divider"></div><a href="{{url('/logout')}}" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php 
if(Auth::check())
{
    $userRole = trim(auth()->user()->role);
    $json_val = config('constants.options.'.$userRole.'_menu');
    $menu_arry = json_decode($json_val,true);
    // print_r(json_decode($a,true));
    // print_r($menu_arry);
}
?>
    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
 
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            @if(Auth::check())
                @foreach($menu_arry as $plaza)
                    @if (!empty($plaza['children'])) 
                        <li class=" nav-item"><a href="javascript:void(0)"><i class="fas fa-home"></i><span data-i18n="nav.menu_levels.main" class="menu-title">{{ $plaza['label'] }}</span></a>
                            <ul class="menu-content">
                                @foreach($plaza['children'] as $plaza1)
                                    <li><a href="{{ url($plaza1['url']) }}" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">{{ $plaza1['label'] }}</a>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class=" nav-item"><a href="{{ url($plaza['url']) }}"><i class="fas fa-home"></i><span data-i18n="nav.menu_levels.main" class="menu-title">{{ $plaza['label'] }}</span></a></li>
                    @endif
                @endforeach
            @endif            
        <!--  <li class=" nav-item"><a href="#"><i class="fas fa-home"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Admin</span></a>
            <ul class="menu-content">
               
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Package Management</a>
                <ul class="menu-content">
                  <li class="selected"><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li>

              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Product Management</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li>

              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">E-commerce</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li>

              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">My Account</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li>

              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Users </a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li>
            </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="fas fa-user-cog"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Accounts</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Invoices</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li> 
            </ul>
          </li>

          <li class=" nav-item"><a href="#"><i class="fas fa-shipping-fast"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Shipping</span></a>
            <ul class="menu-content">
               
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Track & Search</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li> 

              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Add Shipment</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li> 

              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Rates</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li> 

              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Pick up</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li>  
           </ul>
          </li>
           
           <li class=" nav-item"><a href="#"><i class="fas fa-address-card"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Address</span></a>
            <ul class="menu-content">
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Address Book</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li> 
              <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Distribution</a>
                <ul class="menu-content">
                  <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                  </li>                   
                </ul>
              </li>                  
           </ul>
          </li> -->
        </ul>
      </div>

    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
<!--         <div class="content-header row">          
          <div class="breadcrumbs-right breadcrumbs-top">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Admin</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Package Management </a>
                </li>
                <li class="breadcrumb-item active">Search Package  
                </li>
              </ol>
            </div>
          </div>
        </div>
 -->

        <div class="content-body">
          @yield('content')
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer navbar-fixed-bottom soluship_bg">
      <p class="float-sm-left"></p>
      <p class="float-sm-right">© 2018 ECFA - Evergreen Cricket & Futsal Academy</p>      
    </footer>

    <!-- BEGIN VENDOR JS-->
    
    <script src="{{ asset('scripts/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/unison.min.js') }}" type="text/javascript"></script>   
    <script src="{{ asset('scripts/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
 
    <!-- BEGIN ROBUST JS-->
    <script src="{{ asset('scripts/app-menu.js?v=1') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/app.js') }}" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
