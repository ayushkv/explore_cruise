<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Explor Cruise | Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/toastr/toastr.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/adminlte.min.css') }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/style.css?a3') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="Fullscreen">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }} <i class="fas fa-chevron-circle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a href="{{ route('change_password') }}" class="dropdown-item"><i class="fas fa-unlock"></i>
                            Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin_logout') }}" class="dropdown-item"
                            onclick="return confirm('Are you sure to logout?');"><i class="fas fa-user"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <!-- <img src="{{ asset('admin_assets/images/logo.png') }}" width="125px" height="30px" style="margin-left:25px;" class="logo-default"> -->
                <img src="{{ asset('favicon.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Explor Cruise</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('home') }}"
                                class="nav-link {{ request()->route()->getName() == 'home' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('bookings') }}"
                                class="nav-link {{ request()->route()->getName() == 'bookings' ? 'active' : '' }}">
                                <i class="nav-icon fa fa-ship"></i>
                                <p>Bookings</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('enquiries') }}"
                                class="nav-link {{ request()->route()->getName() == 'enquiries' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>Enquiry</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('seo_pages') }}"
                                class="nav-link {{ request()->route()->getName() == 'seo_pages' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-globe"></i>
                                <p>Pages Meta</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('company_info') }}"
                                class="nav-link {{ request()->route()->getName() == 'company_info' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Company Info</p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
            <a href="{{ route('admin_logout') }}" class="nav-link" >
              <i class="nav-icon fas fa-sign-out-alt fa-fw"></i>
              <p>Logout</p>
            </a>
          </li> -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a href="{{ route('index') }}"
                    target="_blank">Explor Cruise</a>.</strong>
            All rights reserved.
        </footer>


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin_assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('admin_assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('admin_assets/plugins/toastr/toastr.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('admin_assets/dist/js/adminlte.js') }}"></script>
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            //CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            //  mode: "htmlmixed",
            // theme: "monokai"
            //});

        })
        <?php  if(Session::has('response_msg')){ ?>
        toastr.<?php echo Session::get('response_type'); ?>('{{ Session::get('response_msg') }}')
        <?php } ?>
    </script>
    @yield('script')

</body>

</html>
