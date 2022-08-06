<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title-admin')
    {{-- <title>Sistem PPDB | Dashboard Admin</title> --}}

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="{{ asset('public/css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('public/css/dashboard.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ asset('public/css/sb-admin-2.css') }}" rel="stylesheet">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="slider">
                <div class="slider-head">
                    <div class="d-block pt-4 pb-3 px-5 ">
                        <img src= "{{ asset('public/PPDB/images/logo smp.png') }}" width="130" height="135" class="d-inline-block align-text-top">
                         <p class="fw-bold mb-0 lh-1 text-bold text-center text-white ">Admin PPDB</p>
                    </div>
                </div>

            <div class="position-sticky pt-3">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">

                    <li class="nav-item active">
                        <a class="nav-link {{ Request::is('/redirects') ? 'active' : ''}}" href="{{url('redirects')}}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link {{ Request::is('datapendaftar*') ? 'active' : ''}}" href="{{url('datapendaftar')}}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Data Pendaftar</span></a>
                    </li>

                  <li class="nav-item active">
                    <a class="nav-link {{ Request::is('penilaian*') ? 'active' : ''}}" href="{{url('penilaian')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Penilaian</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link {{ Request::is('peserta-diterima') ? 'active' : ''}}" href="{{url('pesertaditerima')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Peserta Diterima</span></a>
                </li>

                </ul>
              </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-warning topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <form action="{{ url ('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="nav-link px-2 bg-warning link border-0">
                                        <i class="fas fa-sign-out-alt text-white"> </i>
                                        <span class="mr-2 d-none d-lg-inline text-white text-bold ">Logout</span>
                                    </button>
                                  </form>

                            </a>
                            <!-- Dropdown - User Information -->
                            {{-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div> --}}
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">


                    <!-- Content Dashboard -->
                    @yield('dashboard-admin')
                    <!-- Content Dashboard -->

                    @yield('datapendaftar-admin')
                    @yield('datapendaftar-show')

                    @yield('penilaian-admin')
                    @yield('inputnilai-admin')
                    @yield('peserta-diterima-admin')

                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            {{-- Footer --}}
            <footer
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright  <script>
                        document.write(new Date().getFullYear())
                    </script> | Penerimaan Peserta Didik Baru SMP Al-Azhar Muncar</span>
                </div>
            </div>
        </footer>
            {{-- End of Footer --}}

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('public/vendor/chart.js')}}/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('public/js/demo/chart-pie-demo.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/js/jquery.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{asset('public/js/dashboard.js')}}"></script>

    <script src="https://kit.fontawesome.com/f18d3773ef.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@yield('js')

</body>

</html>
