<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Best E-commerce website">
    <meta name="keywords" content="E-com, E-commerce, Online Shopping">
    <title>{{ $setting->title }}</title>
    <link rel="icon"  type="image/x-icon" href="{{$setting->favicon ? asset('assets/images/'.$setting->favicon) : '#' }}"/>
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/vendors/css/extensions/unslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/vendors/css/charts/morris.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/css/components.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/app-assets/css/pages/timeline.cs')}}s">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('public/back/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="feather icon-menu font-large-1"></i>
                        </a>
                    </li>
                    <li class="nav-item"><a class="navbar-brand logo-div"
                            href="{{ route ('back.dashboard') }}"><img class="brand-logo logo"
                                alt="stack admin logo" src="{{ $setting->logo ? asset('assets/images/'.$setting->logo) : asset('assets/images/placeholder.png') }}">
                            <!-- <h2 class="brand-text">Stack</h2> -->
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                            data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                            href="#"><i class="feather icon-menu"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                                    class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"
                                    data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a
                                    class="dropdown-item" href="#" data-language="fr"><i
                                        class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"
                                    data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a><a
                                    class="dropdown-item" href="#" data-language="de"><i
                                        class="flag-icon flag-icon-de"></i> German</a></div>
                        </li> -->
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                    class="badge badge-pill badge-danger badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span
                                            class="grey darken-2">Notifications</span><span
                                            class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                    </h6>
                                </li>
                                <li class="scrollable-container media-list"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="feather icon-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor
                                                    sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">30 minutes
                                                        ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="feather icon-download-cloud icon-bg-circle bg-red bg-darken-1"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                    mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Five hour
                                                        ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="feather icon-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                    dapibus neque.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="feather icon-check-circle icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i
                                                    class="feather icon-file icon-bg-circle bg-teal"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                        href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown"><i class="ficon feather icon-mail"></i><span
                                    class="badge badge-pill badge-warning badge-up">3</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span
                                            class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                    </h6>
                                </li>
                                <li class="scrollable-container media-list"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="avatar avatar-online avatar-sm rounded-circle"><img
                                                        src="{{ asset ('public/back/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                        alt="avatar"><i></i></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your
                                                    portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-busy rounded-circle"><img
                                                        src="{{ asset ('public/back/app-assets/images/portrait/small/avatar-s-2.png') }}"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your
                                                    work, there is</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="avatar avatar-online avatar-sm rounded-circle"><img
                                                        src="{{ asset ('public/back/app-assets/images/portrait/small/avatar-s-3.png') }}"
                                                        alt="avatar"><i></i></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in
                                                    this week ?</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-away rounded-circle"><img
                                                        src="{{ asset ('public/back/app-assets/images/portrait/small/avatar-s-6.png') }}"
                                                        alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project
                                                    party this saturday.</p><small>
                                                    <time class="media-meta text-muted"
                                                        datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                        href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="avatar avatar-online"><img
                                        src="{{ Auth::user()->photo ? asset('assets/images/'.Auth::user()->photo) : asset ('assets/images/placeholder.png') }}"
                                        alt="avatar"><i></i></div><span class="user-name">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route ('back.profile') }}"><i class="feather icon-user"></i> Update Profile</a>
                                <a class="dropdown-item" href="{{ route ('back.password') }}"><i class="feather icon-unlock"></i> Change Password</a>
                                <!-- <a class="dropdown-item" href="#"><i class="feather icon-check-square"></i> Task</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-message-square"></i> Chats</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('back.logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="feather icon-power"></i> 
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('back.logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <!-- <li class=" navigation-header">
                    <span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                </li> -->
                <li class="active nav-item">
                    <a href="{{ route ('back.dashboard') }}"><i class="feather icon-home"></i>
                        <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="#"><i class="feather icon-align-left"></i>
                        <span class="menu-title" data-i18n="Manage Site">Manage Site</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a class="menu-item" href="{{ route ('back.setting.system') }}" data-i18n="General Settings">General Settings</a>
                        </li>
                        <li>
                            <a class="menu-item" href="#" data-i18n="Email Settings">Email Settings</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#"><i class="feather icon-align-left"></i>
                        <span class="menu-title" data-i18n="Menu levels">Menu levels</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#" data-i18n="Second level">Second level</a></li>
                        <li>
                            <a class="menu-item" href="#" data-i18n="Second level child">Second level child</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="#" data-i18n="Third level">Third level</a></li>
                                <li>
                                    <a class="menu-item" href="#" data-i18n="Third level child">Third level child</a>
                                    <ul class="menu-content">
                                        <li><a class="menu-item" href="#" data-i18n="Fourth level">Fourth level</a></li>
                                        <li><a class="menu-item" href="#" data-i18n="Fourth level">Fourth level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        @yield('content')
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                class="float-md-left d-block d-md-inline-block">Copyright &copy; {{date('Y')}} </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('public/back/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset ('public/back/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset ('public/back/app-assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset ('public/back/app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
    <script src="{{ asset ('public/back/app-assets/vendors/js/timeline/horizontal-timeline.js') }}"></script>
    <script src="{{ asset ('public/back/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset ('public/back/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset ('public/back/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset ('public/back/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset ('public/back/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset ('public/back/assets/js/scripts.js') }}"></script>
    <!-- END: Theme JS-->
    @yield('script')

    <script>
        $(".form").submit( function (){
            $("#submitBtn").attr("disabled", true);
            return true;
        });  
        var createdmsg = '{{Session::get('created')}}';
        var created = '{{Session::has('created')}}';
        if(created){
            toastr.success(
                createdmsg,
                'Created!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }        
        var addedmsg = '{{Session::get('added')}}';
        var added = '{{Session::has('added')}}';
        if(added){
            toastr.success(
                addedmsg,
                'Added!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        var successmsg = '{{Session::get('uploaded')}}';
        var success = '{{Session::has('uploaded')}}';
        if(success){
            toastr.success(
                successmsg,
                'Success!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        var updatedmsg = '{{Session::get('updated')}}';
        var updated = '{{Session::has('updated')}}';
        if(updated){
            toastr.info(
                updatedmsg,
                'Updated!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        var deletedmsg = '{{Session::get('deleted')}}';
        var deleted = '{{Session::has('deleted')}}';
        if(deleted){
            toastr.info(
                deletedmsg,
                'Deleted!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        
        var failedmsg = '{{Session::get('failed')}}';
        var failed = '{{Session::has('failed')}}';
        if(failed){
            toastr.warning(
                failedmsg,
                'Duplicate!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        var errormsg = '{{Session::get('error')}}';
        var error = '{{Session::has('error')}}';
        if(error){
            toastr.error(
                errormsg,
                'Error!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        var warningmsg = '{{Session::get('warning')}}';
        var warning = '{{Session::has('warning')}}';
        if(warning){
            toastr.warning(
                warningmsg,
                'Warning!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        var unauthorizedmsg = '{{Session::get('unauthorized')}}';
        var unauthorized = '{{Session::has('unauthorized')}}';
        if(unauthorized){
            toastr.error(
                unauthorizedmsg,
                'Unauthorized!',
                {
                    positionClass: 'toast-top-right',
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    timeOut: 2000
                }
            );
        }
        
    </script>

</body>
<!-- END: Body-->

</html>