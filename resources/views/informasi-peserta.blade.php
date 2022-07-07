@extends('template')
@section('header')
<span class="app-brand-text demo menu-text fw-bolder ms-2">Informasi Peserta</span>

@section('informasi')

{{-- Content --}}
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

<div class="card">
    <h5 class="card-header">Informasi Pendaftaran Peserta</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        </thead>
        {{-- @foreach ($admin as $siswa) --}}
        <tbody class="table-border-bottom-0">
          <tr>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li>
                    <thead>
                    <tr>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#sedangberjalan" role="tab">Sedang Berjalan</a>
                        </li>

                    {{-- Menu Cetak Formulir --}}
                        <li class="nav-item">
                            {{-- <a class="nav-link" data-bs-toggle="tab" href="/cetakformulir" class="btn btn-sm btn-success">Cetak Formulir</a> --}}
                            <a class="btn btn-primary" href="/cetakformulir" class="btn btn-sm btn-success">Cetak Formulir</a>
                        </li>
                        {{-- End Of Menu Cetak Formulir --}}

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#lihatpengumuman" role="tab">Lihat
                                Pengumuman</a>
                        </li>
                    </ul>
                    {{-- <div id="sedangberjalan" class="tab-pane fade">
                        <div class="profile-personal-info">
                            {{ $siswa->status_pendaftaran}}
                        </div>
                    </div> --}}

                    {{-- <div id="cetakformulir" class="tab-pane fade">
                        <div class="profile-personal-info">
                            <h6><br>waexfcgvhja </h6>
                            <h6>Pelaksanaan : 01 November 2022 - 31 Maret 2023</h6>
                            <li>Tes Masuk (03 April 2023)</li>
                            <li>Wawancara (04 - 05 April 2023)</li>
                            <li>Pengumuman (10 April 2023)</li>
                            <li>MOS (Jadwal Menyusul)</li>
                        </div>
                    </div> --}}
                    </tr>
                    </thead>
                </li>
              </ul>
            </td>
          </tr>
        </tbody>
{{-- @endforeach --}}
      </table>
    </div>
  </div>
        </div>
    </div>

{{-- End Content --}}

@endsection
@endsection

