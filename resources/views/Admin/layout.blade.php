<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('../backend/assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('../backend/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('../backend/dist/css/style.min.css')}}" rel="stylesheet">
   
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">

                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <img src="{{asset('../backend/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset('../backend/assets/images/logo-text.png')}}" alt="homepage" class="light-logo" />
                        </span>
                    </a>

                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('sliderAdmin')}}" aria-expanded="false"><i class="fas fa-image"></i><span
                                    class="hide-menu">Carousel Images</span></a></li>

                        <li class="sidebar-item"><a href="{{route('aboutAdmin')}}" class="sidebar-link"><i
                            class="mdi mdi-note-outline"></i><span class="hide-menu">About Us
                        </span></a></li>

                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">About </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="{{route('aboutAdmin')}}" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Add/ Manage About
                                        </span></a></li>
                                <li class="sidebar-item"><a href="{{route('aboutEdit')}}" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Update About
                                        </span></a></li>
                            </ul>
                        </li> --}}

                        <li class="sidebar-item"><a href="{{route('productAdmin')}}" class="sidebar-link"><i
                            class="mdi mdi-all-inclusive"></i><span class="hide-menu">Our
                            Products </span></a>
                        </li>

                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Our Products </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('productAdmin')}}" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Add/Manage
                                            Products </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('productEdit')}}" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Update Products
                                        </span></a></li>
                            </ul>
                        </li> --}}
                        <li class="sidebar-item"><a href="{{route('serviceAdmin')}}" class="sidebar-link"><i
                            class="fas fa-list-alt"></i><span class="hide-menu">Our 
                            Services
                        </span></a></li>
                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="fas fa-list-ol"></i><span
                                    class="hide-menu">Our Services </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('serviceAdmin')}}" class="sidebar-link"><i
                                            class="fas fa-list-alt"></i><span class="hide-menu"> Add/Manage
                                            Services
                                        </span></a></li>
                                <li class="sidebar-item"><a href="{{route('serviceEdit')}}" class="sidebar-link"><i
                                            class="fas fa-list-alt"></i><span class="hide-menu"> Update Services
                                        </span></a></li>
                            </ul>
                        </li> --}}
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('galleryAdmin')}}" aria-expanded="false"><i class="fas fa-image"></i><span
                                    class="hide-menu">Gallery</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('clientAdmin')}}" aria-expanded="false"><i class="fas fa-users"></i><span
                                    class="hide-menu">Our Clients</span></a></li>
                        <li class="sidebar-item"><a href="{{route('overviewAdmin')}}" class="sidebar-link"><i
                            class="mdi mdi-alert-octagon"></i><span class="hide-menu">
                                Company Overview
                        </span></a></li>
                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Machine Overview</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('overviewAdmin')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Add/Manage
                                            Machine Overview
                                        </span></a></li>
                                <li class="sidebar-item"><a href="{{route('overviewEdit')}}" class="sidebar-link"><i
                                            class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Update Machine
                                            Overview
                                        </span></a></li>
                            </ul>
                        </li> --}}
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('messageToClient')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Messages For Clients</span></a></li>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('MessagesFromClients')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Messages From Clients</span></a></li>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('address')}}" aria-expanded="false"><i class="fas fa-list-alt"></i><span
                                    class="hide-menu">Address</span></a></li>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">

                        </div>
                    </div>
                </div>
            </div>

           
            @yield('content')


            <footer class="footer text-center">
                All Rights Reserved to Unitech Label and Tag. Designed and Developed by <a href="#">Sharmin
                    Sultana</a>.
            </footer>


            {{-- javascript --}}
            <script src="{{asset('../backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="{{asset('../backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('../backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
            <script src="{{asset('../backend/assets/extra-libs/sparkline/sparkline.js')}}"></script>
            <!--Wave Effects -->
            <script src="{{asset('../backend/dist/js/waves.js')}}"></script>
            <!--Menu sidebar -->
            <script src="{{asset('../backend/dist/js/sidebarmenu.js')}}"></script>
            <!--Custom JavaScript -->
            <script src="{{asset('../backend/dist/js/custom.min.js')}}"></script>
            <!-- Charts js Files -->
            <script src="{{asset('../backend/assets/libs/flot/excanvas.js')}}."></script>
            <script src="{{asset('../backend/assets/libs/flot/jquery.flot.js')}}"></script>
            <script src="{{asset('../backend/assets/libs/flot/jquery.flot.pie.js')}}"></script>
            <script src="{{asset('../backend/assets/libs/flot/jquery.flot.time.js')}}"></script>
            <script src="{{asset('../backend/assets/libs/flot/jquery.flot.stack.js')}}"></script>
            <script src="{{asset('../backend/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
            <script src="{{asset('../backend/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
            <script src="{{asset('../backend/dist/js/pages/chart/chart-page-init.js')}}"></script>

            
            {{-- alert js --}}
            <script>
                var msg = '{{Session::get('alert')}}';
                var exist = '{{Session::has('alert')}}';
                if(exist){
                  alert(msg);
                }
              </script>
</body>

</html>