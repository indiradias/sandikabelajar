@extends('layouts.Peserta')
@section('title-peserta')
    <title>Sistem PPDB | Informasi Peserta</title>
@endsection
@section ('header')
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
        @foreach ($siswa as $index => $siswa)
        <tbody class="table-border-bottom-0">
          <tr>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li>
                    <thead>
                    <tr>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#sedangberjalan" role="tab">Cek Status Pendaftaran</a>
                        </li>

                    {{-- Menu Cetak Formulir --}}
                        <li class="nav-item">
                            {{-- <a class="nav-link" data-bs-toggle="tab" href="{{url('cetakformulir')}}" class="btn btn-sm btn-success">Cetak Formulir</a> --}}
                            <a class="btn btn-primary" href="{{ route('siswa.edit',$siswa->id) }}" class="btn btn-sm btn-success">Cetak Formulir</a>
                        </li>
                        {{-- End Of Menu Cetak Formulir --}}

                        {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#lihatpengumuman" role="tab">Lihat
                                Pengumuman</a>
                        </li> --}}
                    </ul>
                    <div class="profile-tab">
                        <div class="tab-content">
                            <div id="sedangberjalan" class="tab-pane fade active show">
                                <div class="profile-personal-info">
                                    Status Pendaftaran :
                                    {{ $siswa->status_pendaftaran}}
                                </div>
                            </div>

                            <div id="lihatpengumuman" class="tab-pane fade show">
                                <div class="profile-personal-info">
                                    <h6><br>Gelombang II Jalur Prestasi</h6>
                                    <h6>Pelaksanaan : 01 April 2023 - 30 Juni 2023</h6>
                                    <h6>Kriteria Seleksi </h6>
                                    <li>Juara I, II, III Minimal Tingkat Kabupaten</li>
                                    <li>Lomba Akademik (OLIMPIADE MIPA) Minimal Tingkat Kabupaten</li>
                                    <li>Lomba Non Akademik (MTQ, Tahfidz Minimal 2 Juz, Atletik)</li>
                                </div>
                            </div>
                        </div>
                        </div>
                    </tr>
                    </thead>
                </li>
              </ul>
            </td>
          </tr>
        </tbody>
@endforeach
      </table>
    </div>
  </div>
        </div>
    </div>

{{-- End Content --}}

@endsection
@endsection

