@extends('template-admin')
@section('penilaian-admin')
{{-- CONTENT --}}

      <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Penilaian Admin</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-calculator fa-sm text-white-50"></i> Generate Nilai</a>
    </div>

      {{-- Menu Search--}}
      <form action="{{ url()->current() }}"
        method="get">
      <div class="row-mb-2">
      <div class="col-mb-3">
        <div class="input-group mb-4">
        <input type="search" class="from-control" placeholder="search..." name="keywoard" value="{{ request('keyword') }}">
        <button class="btn btn-success link" type="submit">Search</button>
      </div>
      </div>
    </div>
      {{-- End Off Menu Search --}}

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
                    <th>Nilai</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            @foreach ($sisw as $index => $siswa)

            <tr>
                <td>{{ $index + $sisw->firstItem() }}</td>
                <td>{{ $siswa->nisn}}</td>
                <td>{{ $siswa->nik_peserta}}</td>
                <td>{{ $siswa->nama_peserta}}</td>
                <td>{{ $siswa->jenis_kelamin}}</td>
                <td>
                    {{ $siswa->nilai }}
                    <i class="fe fe-info"></i>
                </td>

                {{-- Action --}}
                <td class="text-center">
                    {{-- <a class="btn btn-success link" href="/datapendaftar/show/{{ $siswa->nisn}}" class="btn btn-sm btn-success">Nilai</a> --}}

                    @if (empty($siswa->nilai))
                        <a class="btn btn-warning" href="/penilaian/inputnilai/{{ $siswa->nisn}}" class="btn btn-sm btn-warning">Input Nilai</a>
                    @else
                        {{-- <a class="btn btn-success link" href="/penilaian/editnilai/{{ $siswa->nisn}}" class="btn btn-sm btn-warning">Edit Nilai</a> --}}
                        {{-- <a class="btn btn-primary" href="" class="btn btn-sm btn-warning">Nilai Sudah Tersedia</a> --}}
                        <i class="fa fa-check-square wd-90" aria-hidden="true"></i>
                        <span class="mr-2 d-none d-lg-inline text-black text-bold ">Selesai</span>
                    @endif
                </td>


                        {{-- @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> --}}
                    {{-- </form>
                </td> --}}
            </tr>
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

{{-- END of CONTENT --}}
@endsection


