<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CV</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
    <!-- Animate CSS -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" media="screen" />
    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" media="screen" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datepicker.css') }}" />
    <!-- Bar Indicator -->
    <link href="{{ asset('assets/css/barIndicator.css') }}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="{{ asset('assets/fonts/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Data Tables -->
		<link href="{{ asset('assets/css/datatables/dataTables.bs.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/datatables/autoFill.bs.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/datatables/fixedHeader.bs.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/datatables/buttons.bs.css') }}" rel="stylesheet" />
    <style>
        .glyphicon {
            line-height: 25px;
            font-size: 20px;
        }
    </style>
    @yield('css')
</head>
<body>
    @if (!Auth::guest())
    <!-- Header Start -->
    <header>

        <!-- Logo starts -->
        <div class="logo">
            <a href="#">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                <span class="menu-toggle hidden-xs">
                    <i class="fa fa-bars"></i>
                </span>
            </a>
        </div>
        <!-- Logo ends -->

        <!-- Custom Search Starts -->
        <div class="custom-search pull-left hidden-xs hidden-sm">
            <input type="text" class="search-query" placeholder="Search here">
            <i class="fa fa-search"></i>
        </div>
        <!-- Custom Search Ends -->

        <!-- Mini right nav starts -->
        <div class="pull-right">
            <ul id="mini-nav" class="clearfix">
                <li class="list-box hidden-lg hidden-md hidden-sm" id="mob-nav">
                    <a href="#">
                        <i class="fa fa-reorder"></i>
                    </a>
                </li>
                <li class="list-box user-profile hidden-xs">
                    <a id="drop4" href="#" class="user-avtar animated rubberBanddropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('Uploads/images') }}/{!! Auth::user()->photo !!}" alt="user avatar" />
                        <span class="user-name">{!! Auth::user()->name !!}<i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu sm user-settings">
                        <li>
                            <a href="{{ url('/admin/Profile') }}"> <i class="fa fa-sun-o"></i>Paramètres du compte</a>
                        </li>
                        <li>
                            <a href="{!! url('/logout') !!}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>  Déconnexion
                            </a>
                            <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Mini right nav ends -->

    </header>
    <!-- Header ends -->
    <!-- Left sidebar starts -->
    <aside id="sidebar">
        <!-- Menu start -->
        <div id='menu'>
            <ul>
                @include('layouts.sidebar')

            </ul>
        </div>
        <!-- Freebies Starts -->
    </aside>
    <!-- Left sidebar ends -->
    <!-- Dashboard Wrapper starts -->
    <div class="dashboard-wrapper">
        <!-- Top Bar ends -->
        <!-- Main Container starts -->
        <div class="main-container">
            <!-- Container fluid Starts -->
            <div class="container-fluid">
                <!-- Spacer starts -->
                <div class="spacer">
                    <!-- Row Start -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- Widget starts -->
                            <div class="blog">
                                <div class="blog-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Container fluid ends -->

        <!-- Main Container ends -->

        <!-- Footer starts -->
        <footer>
            Copyright cv 2014.
        </footer>
        <!-- Footer ends -->

    </div>
    @else   
@endif

    
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- jQuery UI JS -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Sparkline graphs -->
    <script src="{{ asset('assets/js/sparkline.js') }}"></script>

    <!-- jquery ScrollUp JS -->
    <script src="{{ asset('assets/js/scrollup/jquery.scrollUp.js') }}"></script>

        <!-- Data Tables -->
       <script src="{{ asset('assets/js/datatables/dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/js/datatables/dataTables.bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/datatables/dataTables.tableTools.js') }}"></script>
		<script src="{{ asset('assets/js/datatables/autoFill.min.js') }}"></script>
		<script src="{{ asset('assets/js/datatables/autoFill.bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/datatables/fixedHeader.min.js') }}"></script>



        <!-- Custom Data tables -->
      <script src="{{ asset('assets/js/datatables/custom-datatables.js') }}"></script>

        <!-- Custom Index -->
      <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('scripts')
</body>
</html>