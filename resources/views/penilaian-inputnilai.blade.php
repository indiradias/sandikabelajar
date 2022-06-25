<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem PPDB | Data Pendaftar Admin</title>

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-success link flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">PPDB SMP Al-Azhar Muncar</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      {{-- Logout --}}
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link px-3 bg-dark border-0">
            <i class="bi bi-box-arrow-right"></i>Logout</button>
      </form>
      {{-- End of Logout --}}
    </div>
  </div>
</header>

{{-- SIDEBAR --}}
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard-admin') ? 'active' : ''}}" aria-current="page" href="/dashboard-admin">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('datapendaftar') ? 'active' : ''}}" href="/datapendaftar">
              <span data-feather="database"></span>
             Data Pendaftar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Nilai Tes Peserta</h1>
      </div>

      {{-- Ini Untuk Konten --}}
      <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
                <a class="btn btn-secondary" href="javascript:history.go(-1)"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <form action="{{ route('sisw.update',$nisn) }}" method="POST">
        @csrf
        @method('PUT') --}}

        <form
            action="{{ route('penilaian.store') }}" method="post"
        >
            @csrf
            <input
                type="text"
                name="nisn"
                value="{{ $nisn }}"
                style="display:none;"
            >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tes Wawancara</strong>
                    {{-- <input
                            type="text" name="tes_wawancara" class="form-control" placeholder="Tes Wawancara" value="{{ $tes_wawancara }}"
                        > --}}
                    <input
                        type="text"
                        name="tes_wawancara"
                        class="form-control"
                        placeholder="Masukkan Nilai"
                        required
                    >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tes Tulis</strong>
                    {{-- <input
                            type="text" name="tes_tulis" class="form-control" placeholder="Tes Tulis" value="{{ $tes_tulis}}"
                        > --}}
                    <input
                        type="text"
                        name="tes_tulis"
                        class="form-control"
                        placeholder="Masukkan Nilai"
                        required
                    >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tes Mengaji</strong>
                    {{-- <input
                            type="text" name="tes_mengaji" value="{{ $tes_mengaji }}" class="form-control" placeholder="Tes Mengaji"
                        > --}}
                    <input
                        type="text"
                        name="tes_mengaji"
                        required
                        class="form-control"
                        placeholder="Masukkan Nilai"
                    >
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success link">Simpan</button>

        </div>
        </div>
    </div>
    </form>

      </main>
  </div>
</div>


   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
      <script src="/js/dashboard.js"></script>
  </body>
</html>
