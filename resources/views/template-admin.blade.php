<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem PPDB | Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                        <img src="PPDB/images/logo smp.png" width="130" height="135" class="d-inline-block align-text-top">
                         <p class="fw-bold mb-0 lh-1 text-bold text-center text-white ">PPDB Al-Azhar Muncar</p>
                    </div>
                </div>

            <div class="position-sticky pt-3">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">

                    <li class="nav-item active">
                        <a class="nav-link {{ Request::is('dashboard-admin') ? 'active' : ''}}" href="/dashboard-admin">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link {{ Request::is('datapendaftar*') ? 'active' : ''}}" href="/datapendaftar">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Data Pendaftar</span></a>
                    </li>

                  <li class="nav-item active">
                    <a class="nav-link {{ Request::is('penilaian*') ? 'active' : ''}}" href="/penilaian">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Penilaian</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link {{ Request::is('peserta-diterima') ? 'active' : ''}}" href="/peserta-diterima">
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

                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="nav-link px-2 bg-warning link border-0">
                                        <span class="mr-2 d-none d-lg-inline text-grey text-bold ">Logout</span>
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
                    </script> </span>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
