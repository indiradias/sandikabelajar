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
        <h1 class="h2">Data Pendaftar</h1>
      </div>
        {{-- Ini Untuk Konten --}}
        <h5> Show Siswa</h5>
        <div class="row mt-4 mb-4">
            <div class="col-sm-4 col-6">

            </div>
            <div >
                <span style="display: inline">
                    <a class="btn btn-secondary" style="width: 75px;" href="javascript:history.go(-1)"> Back</a>
                </span>
                    <form action="{{ route('datapendaftar.update', $nisn) }}" method="post"
                        enctype="multipart/form-data"
                >
                     @method('PATCH')
                     @csrf
                <div class="form-group" hidden>
                    <input type="text" name="status_pendaftaran" class="form-control" placeholder="NISN Peserta" value="Terverifikasi">
                </div>
                <br>
                <span style="display: inline">
            <button type="submit" class="btn btn-success link">Konfirmasi Status</button>
        </span>
    </form>


            </div>

    </div>

        {{-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NISN</strong>
                      <?= $nisn;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK Peserta</strong>
                    <?= $nik_peserta;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Peserta</strong>
                    <?= $nama_peserta;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin</strong>
                    <?= $jenis_kelamin;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tempat Lahir</strong>
                    <?= $tempat_lahir;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Lahir</strong>
                    <?= $tanggal_lahir;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah</strong>
                    <?= $asal_sekolah;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Peserta</strong>
                    <?= $alamat_peserta;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ayah</strong>
                    <?= $nama_ayah?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ibu</strong>
                    <?= $nama_ibu?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nik Ayah</strong>
                    <?= $nik_ayah?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nik Ibu</strong>
                    <?= $nik_ibu?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pekerjaan Ayah</strong>
                    <?= $pekerjaan_ayah?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pekerjaan Ibu</strong>
                    <?= $pekerjaan_ibu?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Orangtua</strong>
                    <?= $alamat_orangtua?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Hp Orangtua</strong>
                    <?= $noHp_orangtua?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pasphoto</strong>
                    <?= $pasphoto?>

                    <img
                    src="../assets/img/illustrations/man-with-laptop-light.png"
                    />

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Akta peserta</strong>
                    <?= $akta_peserta?>
                </div>
            </div>



        </div> --}}

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row mb-2">
                        <div class="pt-4 border-bottom-1 pb-3">
                            <h5 class="text-primary">PROFIL PESERTA</h5>
                        </div>
                        <div class="col-sm-4 col-5">
                            <h6 class="f-w-500">NISN Peserta</h6>
                        </div>
                        <div class="col-sm-8 col-7">
                            <?= $nisn;?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 col-6">
                            <h6 class="f-w-500">NIK Peserta</h6>
                        </div>
                        <div class="col-sm-8 col-6">
                            <?= $nik_peserta;?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 col-6">
                            <h6 class="f-w-500">Nama Peserta</h6>
                        </div>
                        <div class="col-sm-8 col-6">
                            <?= $nama_peserta;?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 col-6">
                            <h6 class="f-w-500">Jenis Kelamin</h6>
                        </div>
                        <div class="col-sm-8 col-6">
                            <?= $jenis_kelamin;?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 col-6">
                            <h6 class="f-w-500">Tempat dan Tanggal Lahir</h6>
                        </div>
                        <div class="col-sm-8 col-6">
                            <?= $tempat_lahir;?>,
                            <?= $tanggal_lahir;?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 col-6">
                            <h6 class="f-w-500">Asal Sekolah</h6>
                        </div>
                        <div class="col-sm-8 col-6">
                            <?= $asal_sekolah;?>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 col-6">
                            <h6 class="f-w-500">Alamat Peserta</h6>
                        </div>
                        <div class="col-sm-8 col-6">
                            <?= $alamat_peserta;?>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <div class="pt-4 border-bottom-1 pb-3">
                        <img src="{{ public($pasphoto) }}" width="250px" height="300" alt="">
                    </div>
                </div> --}}
            </div>


                <div class="pt-4 border-bottom-1 pb-3">
                    <h5 class="text-primary">DATA ORANG TUA</h5>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-2">
                            <div class="col-sm-4 col-6">
                                <h6 class="f-w-500">Nama Ayah</h6>
                            </div>
                            <div class="col-sm-8 col-6">
                                <?= $nama_ayah;?>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h6 class="f-w-500">Pekerjaan Ayah</h6>
                            </div>
                            <div class="col-sm-9 col-6">
                                <?= $pekerjaan_ayah;?>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h6 class="f-w-500">Alamat Orangtua</h6>
                            </div>
                            <div class="col-sm-9 col-6">
                                <?= $alamat_orangtua;?>
                            </div>
                            {{-- <div class="col-sm-3 col-6">
                                <h6 class="f-w-500">Dokumen</h6>
                            </div> --}}
                            {{-- <div class="col-sm-9 col-6">
                                <a class="btn btn-light shadow btn-xs sharp me-1" title="Detail Registration"
                                href="{{ asset($viewData->slip_gaji) }}"><i class="fa fa-file-alt"></i></a>
                                <a class="btn btn-light shadow btn-xs sharp me-1" title="Detail Registration"
                                href="{{ asset($viewData->kk) }}"><i class="fa fa-file-alt"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    <!--kiri-->
                    <div class="col-lg-6">
                        <div class="row mb-2">
                            <div class="col-sm-3 col-6">
                                <h6 class="f-w-500">Nama Ibu</h6>
                            </div>
                            <div class="col-sm-9 col-6">
                                <?= $nama_ibu;?>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h6 class="f-w-500">Pekerjaan Ibu</h6>
                            </div>
                            <div class="col-sm-9 col-6">
                                <?= $pekerjaan_ibu;?>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h6 class="f-w-500">No Hp Orangtua</h6>
                            </div>
                            <div class="col-sm-9 col-6">
                                <?= $noHp_orangtua;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
