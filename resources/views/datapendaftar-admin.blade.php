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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pendaftar</h1>
      </div>

      {{-- Menu Search --}}
      <form action="{{ url()->current() }}"
        method="get">
      <div class="row">
      <div class="col-md-3">
        <div class="input-group mb-4">
        <input type="search" class="from-control" placeholder="Search..." name="keywoard" value="{{ request('keyword') }}">
        <button class="btn btn-success link" type="submit">Search</button>
      </div>
      </div>
    </div>
      {{-- End Off Menu Search --}}

      {{-- <form action="{{ url()->current() }}"
        method="get">
        <div class="relative mx-auto">
          <input type="search" name="keyword" value="{{ request('keyword') }}" placeholder="Search ....."
            class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">

            <button type="submit"
            class="absolute top-0 right-0 inline-flex items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
            <svg class="w-5 h-5 text-gray-500 transition dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 disabled:opacity-25"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="1 2 2 3"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </form> --}}


      {{-- Tampilan Tabel Data Pendaftar --}}
      <div class="card">

        <div class="table-responsive text-nowrap">
            @if ($message = Session::get('succes'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
             @endif
          <table class="table table-stripped table-md table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nik Peserta</th>
                    <th>Nama Peserta</th>
                    <th>JK</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>


            @foreach ($sisw as $siswa)

            {{-- <tbody class="table-border-bottom-0">
              <tr>

              </tr>
            </tbody> --}}
            <tbody>
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $siswa->nisn}}</td>
                <td>{{ $siswa->nik_peserta}}</td>
                <td>{{ $siswa->nama_peserta}}</td>
                <td>{{ $siswa->jenis_kelamin}}</td>
                <td>{{ $siswa->status_pendaftaran}}</td>

                {{-- Status --}}
                {{-- <td>
                    <div class="col-xl-2  col-lg-6 col-sm-4 mb-sm-3 mb-3 text-end">
                        <div class="d-flex justify-content-end project-btn">
                            @if ($siswa->status_pendaftaran)
                                <a class="bx bx-dots-vertical-rounded"
                                    href="detail-status/{{ $siswa->nisn }}"
                                    class=" btn btn-warning text-success fs-16 font-w600">

                                </a>
                            @else
                                <a
                                    href="detail-status/{{ $siswa->nisn }}"
                                    class="  text-black fs-16 font-w600">
                                    Belum Terverifikasi
                                </a>
                            @endif
                        </div>
                    </div>


                </td> --}}

                {{-- Action --}}
                <td class="text-center">
                    <a class="btn btn-success link" href="/datapendaftar/show/{{ $siswa->nisn}}" class="btn btn-sm btn-success">Show</a>

                    <a class="btn btn-warning" href="/datapendaftar/edit/{{ $siswa->nisn}}" class="btn btn-sm btn-warning">Edit</a>
                </td>


                        {{-- @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> --}}
                    {{-- </form>
                </td> --}}
            </tr>
        </tbody>
            @endforeach
          </table>
          {!! $sisw->links() !!}
        </div>
      </div>

      {{-- End Of Tampilan Tabel Data Pendaftar --}}


    </main>
  </div>
</div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
      <script src="/js/dashboard.js"></script>

  </body>
</html>
