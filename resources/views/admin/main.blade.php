<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elband Angkasa Pura</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('lte/dist/img/logo 2.png') }}" alt="BTJ LOGO" height="200">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin/dashboard" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('lte/dist/img/logo 2.png') }}" alt="Angkasa Pura I Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Elband</span>
            </a>

            <!-- Sidebar Menu -->
            <div class="sidebar"> <!-- Perbaikan: Menambahkan pembukaan div untuk sidebar -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/admin/dashboard" class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/carousellawal" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.carousellawal', 'admin.carousellawal.create', 'admin.carousellawal.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Carousel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/welcome" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.welcome', 'admin.welcome.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Welcome
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/takingcare" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.takingcare', 'admin.takingcare.create', 'admin.takingcare.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Taking Care
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/airporttechnology" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.airporttechnology', 'admin.airporttechnology.edit', 'admin.airporttechnologyimage', 'admin.airporttechnologyimage.edit', 'admin.airporttechnologyimage.create']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Airport Technology
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/ourskill" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.ourskill', 'admin.ourskill.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Our Skill
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/vissionmissiontarget" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.vissionmissiontarget', 'admin.vissionmissiontarget.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Vision Mission Target
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/aboutus" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.aboutus', 'admin.aboutus.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    About Us
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/ourservice" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.ourservice', 'admin.ourservice.edit', 'admin.ourservicedata', 'admin.ourservicedata.create', 'admin.ourservicedata.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Our Service
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/learningcentercontent" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.learningcentercontent', 'admin.learningcentercontent.create', 'admin.learningcentercontent.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Learning Center
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/blog" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.blog', 'admin.blog.create', 'admin.blog.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Blog
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/development" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.development', 'admin.development.create', 'admin.development.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Development
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/peraturanpkl" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.peraturanpkl', 'admin.peraturanpkl.create', 'admin.peraturanpkl.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Peraturan PKL
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/daftarnilai" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.daftarnilai', 'admin.daftarnilai.create', 'admin.daftarnilai.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Daftar Nilai
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/user" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.user', 'admin.user.create']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                   Daftar User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/planning" class="nav-link {{ in_array(Route::currentRouteName(), ['admin.planning', 'admin.planning.create', 'admin.planning.edit']) ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Planning
                                </p>
                            </a>
                        </li>
                        <li class="nav-item border rounded mb-1">
                            <a href="/admin/contactus" class="nav-link {{ Route::currentRouteName() == 'admin.contactus' ? 'active' : '' }}">
                                <i class="nav-icon"></i>
                                <p>
                                    Contact Us
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> 
            <!-- /.sidebar-menu -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('lte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte/dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
