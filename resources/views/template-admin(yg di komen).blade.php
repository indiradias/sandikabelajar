<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem PPDB | Dashboard Admin</title>

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

  </head>
  <body id="page-top">

<nav class="navbar navbar-dark sticky-top bg-success link flex-md-nowrap p-0 shadow">


  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      {{-- Logout --}}

      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link px-3 bg-success link border-0">
                    <p class="bg-success text-white px-3">Logout</p>
        </button>
      </form>
      {{-- End of Logout --}}
    </div>
  </div>
</nav>


  <div class="row">

    {{-- SIDEBAR --}}
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-success link sidebar collapse">

        <div class="slider">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-5 ">
                    <img src="PPDB/images/logo smp.png" width="125" height="130" class="d-inline-block align-text-top">
                     <p class="fw-bold mb-0 lh-1 text-center text-white ">Admin PPDB</p>
                </div>
            </div>

      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard-admin') ? 'active' : ''}}" href="/dashboard-admin">
            <p class="bg-success text-white">
              <span data-feather="home"></span>
              Dashboard
            </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('datapendaftar') ? 'active' : ''}}" href="/datapendaftar">
              <span data-feather="database"></span>
             Data Pendaftar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('penilaian') ? 'active' : ''}}" href="/penilaian">
              <span data-feather="divide-square"></span>
              Penilaian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="credit-card"></span>
              Peserta Diterima
            </a>
          </li>
        </ul>
      </div>
    </nav>
{{-- END OF SIDEBAR --}}

{{-- Content --}}
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    @yield('dashboard-admin')
    @yield('datapendaftar-admin')
    @yield('datapendaftar-show')
    @yield('penilaian-admin')
    @yield('peserta-diterima-admin')


  </main>
{{-- End Of Content --}}

  </div>




 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
 {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
 <script src="/js/dashboard.js"></script>

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
