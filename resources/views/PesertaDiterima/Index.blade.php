@extends('layouts.Admin')
@section('peserta-diterima-admin')
{{-- CONTENT --}}

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peserta Diterima</h1>
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
                    <th>Nilai Akhir</th>
                    <th>Status Peserta</th>
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
                <td>{{ $siswa->jenis_kelamin}}</td>

                {{-- Action --}}
                <td class="text-center">
                    <a class="btn btn-success" href="{{ route('pesertaditerima.edit',$siswa->id) }}" class="btn btn-sm btn-warning">Diterima</a>
                    <a class="btn btn-warning" href="/peserta/ditolak/{{ $siswa->nisn}}" class="btn btn-sm btn-warning">Ditolak</a>
                </td>


                        {{-- @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> --}}
                    {{-- </form>
                </td> --}}
            </tr>
            @endforeach
          </table>
          {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
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
             </div> --}}

            </div>
        </div>



      {{-- End Of Tampilan Tabel Data Pendaftar --}}

{{-- END of CONTENT --}}
@endsection
