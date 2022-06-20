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
        <h1 class="h2">Lihat Data Peserta</h1>
      </div>
        {{-- Ini Untuk Konten --}}
        <div class="row mt-4 mb-4">
            <div class="col-sm-4 col-6">

            </div>
            <div >
                <span style="display: inline">
                    <a class="btn btn-secondary" style="width: 75px;" href="javascript:history.go(-1)"> Back</a>
                </span>
                    {{-- <form action="{{ route('datapendaftar.update', $nisn) }}" method="post"
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
    </form> --}}
            </div>

    </div>

        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Data Pribadi Peserta</h5>
                    </div>

                    <div class="card-body">

                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NISN Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nisn" value="{{ $nisn }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NIK Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik_peserta" value="{{ $nik_peserta }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_peserta" value="{{ $nama_peserta }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kelamin</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_kelamin" value="{{ $jenis_kelamin }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_lahir" value="{{ $tempat_lahir }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal_lahir" value="{{ $tanggal_lahir }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Asal Sekolah</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="asal_sekolah" value="{{ $asal_sekolah }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_peserta" value="{{ $alamat_peserta }}" disabled/>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                {{-- Batas Table form 1 --}}

                <div class="col-xxl">
                    <div class="card mb-4">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Data Orangtua Peserta</h5>
                      </div>

                      <div class="card-body">

                        <form>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Ayah</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nama_ayah" value="{{ $nama_ayah }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Ibu</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nama_ibu" value="{{ $nama_ibu }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pekerjaan Ayah</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="$pekerjaan_ayah" value="{{ $pekerjaan_ayah }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pekerjaan Ibu</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="$pekerjaan_ibu" value="{{ $pekerjaan_ibu }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat Orangtua</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="alamat_orangtua" value="{{ $alamat_orangtua }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">No Hp Orangtua</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                id="noHp_orangtua"
                                class="form-control phone-mask"
                                value="{{ $noHp_orangtua }}" disabled
                              />
                            </div>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
                  {{-- Batas Tabel Form 2 --}}

                  <div class="col-xxl">
                    <div class="card mb-4">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">File Berkas Persyaratan Peserta</h5>
                      </div>

                      <div class="card-body">

                        <form>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pasphoto</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $pasphoto) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Akta Peserta</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $pasphoto) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">KTP Orangtua</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $ktp_orangtua) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kartu Keluarga</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $kartu_keluarga) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Raport</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $raport) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sertifikat Prestasi</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $sertifikat_prestasi) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          {{-- Button Verifikasi Status --}}
                          {{-- <div class="row justify-content-end">
                            <div class="col-sm-8">
                             <div class="form-group" hidden>
                             <input type="text" name="status_pendaftaran" class="form-control" placeholder="NISN Peserta" value="Terverifikasi">
                             </div>
                            <br>
                                <span style="display: inline">
                                    <button type="submit" class="btn btn-success link">Konfirmasi Status</button>
                                </span>
                            </div>
                          </div> --}}
                          {{-- End Verifikasi Status --}}
                        </form>
                      </div>
                    </div>
                  </div>
                  {{-- Batas Tabel Form 3 --}}

              </div>
              </div>
            </div>
            <!-- / Content -->
            {{-- Button Verifikasi Status --}}
            <form action="{{ route('datapendaftar.update', $nisn) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                    <div class="form-group" hidden>
                        <input type="text" name="status_pendaftaran" class="form-control" placeholder="NISN Peserta" value="Terverifikasi">
                    </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success link">Konfirmasi Status</button>
                </div>
            </form>
            {{-- End Of Button Verifikasi Status --}}

            <div class="content-backdrop fade"></div>
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
