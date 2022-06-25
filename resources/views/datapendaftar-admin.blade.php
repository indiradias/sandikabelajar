@extends('template-admin')
@section('datapendaftar-admin')

{{-- CONTENT --}}
      <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

      {{-- Menu Search --}}

      <form action="{{ url()->current() }}"
        method="get">
      <div class="row-mb-2">
      <div class="col-mb-2">
        <div class="input-group mb-4">
        <input type="search" class="from-control " placeholder="Search..." name="keywoard" value="{{ request('keyword') }}">
        <button class="btn btn-success link" type="submit">Search
            {{-- <i class="fas fa-search fa-sm"></i> --}}
        </button>
      </div>
      </div>
    </div>

      {{-- Tampilan Tabel Data Pendaftar --}}
      <div class="card-body">

        <div class="table-responsive text-nowrap">
            @if ($message = Session::get('succes'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
             @endif
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nik Peserta</th>
                    <th>Nama Peserta</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>


            @foreach ($sisw as $index => $siswa)

            <tbody>
            <tr>
                <td>{{ $index + $sisw->firstItem() }}</td>
                <td>{{ $siswa->nisn}}</td>
                <td>{{ $siswa->nik_peserta}}</td>
                <td>{{ $siswa->nama_peserta}}</td>
                <td>{{ $siswa->jenis_kelamin}}</td>
                <td>{{ $siswa->status_pendaftaran}}</td>

                {{-- Action --}}
                <td class="text-center">
                    <a class="btn btn-warning" href="/datapendaftar/show/{{ $siswa->nisn}}" class="btn btn-sm btn-success">Lihat Data Peserta</a>
                    {{-- <a class="btn btn-warning" href="/datapendaftar/edit/{{ $siswa->nisn}}" class="btn btn-sm btn-warning">Edit</a> --}}
                </td>

                        {{-- @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> --}}
        </form>
                </td>
            </tr>
        </tbody>
            @endforeach
          </table>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          {!! $sisw->links() !!}
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start text-gray-600 fs-6">
            <p>Menampilkan</p>
             {{ $sisw->firstItem() }}
             <p>-</p>
             {{ $sisw->lastItem() }}
             <p>dari</p>
             {{ $sisw->total() }}
             <p>data</p>
           </div>

        </div>
      </div>
      {{-- End Of Tampilan Tabel Data Pendaftar --}}

{{-- END OF CONTENT --}}
@endsection
