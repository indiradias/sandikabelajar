@extends('template-admin')
@section('penilaian-admin')
{{-- CONTENT --}}

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penilaian Peserta</h1>
      </div>

      {{-- Menu Search--}}
      <form action="{{ url()->current() }}"
        method="get">
      <div class="row">
      <div class="col-md-3">
        <div class="input-group mb-4">
        <input type="search" class="from-control" placeholder="search..." name="keywoard" value="{{ request('keyword') }}">
        <button class="btn btn-success link" type="submit">Search</button>
      </div>
      </div>
    </div>
      {{-- End Off Menu Search --}}

      {{-- Tampilan Tabel Data Pendaftar --}}
      <div class="card">

        <div class="table-responsive text-nowrap">
            @if ($message = Session::get('succes'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
             @endif
          <table class="table table-stripped table-md table-responsive" id="DataTables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nik Peserta</th>
                    <th>Nama Peserta</th>
                    <th>JK</th>
                    <th>Nilai</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            @foreach ($sisw as $index => $siswa)

            <tr>
                <td class="text-center">{{ ++$i }}</td>
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
                        <a class="btn btn-success link" href="/penilaian/editnilai/{{ $siswa->nisn}}" class="btn btn-sm btn-warning">Edit Nilai</a>
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
          {!! $sisw->links() !!}

      {{-- End Of Tampilan Tabel Data Pendaftar --}}

{{-- END of CONTENT --}}
@endsection


