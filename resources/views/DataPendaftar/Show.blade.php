@extends('layouts.Admin')
@section('title-admin')
    <title>Sistem PPDB | Lihat Data Peserta</title>
@endsection
@section('datapendaftar-show')

{{-- CONTENT --}}

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lihat Data Peserta</h1>
</div>

{{-- Ini Untuk Konten --}}
<div class="row mt-4 mb-4">
    <div class="col-sm-4 col-6"></div>
        <div >
            <span style="display: inline">
                <a class="btn btn-secondary" style="width: 80px;" href="javascript:history.go(-1)">Kembali</a>
            </span>
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
                            <div class="form-group">
                                <strong>Tahun Ajaran</strong>
                                {{ $siswa->tahun_ajaran }}
                            </div>

                            <div class="form-group">
                                <strong>NISN</strong>
                                {{ $siswa->nisn }}
                            </div>

                            <div class="form-group">
                                <strong>NIK</strong>
                                {{ $siswa->nik_peserta }}
                            </div>

                            <div class="form-group">
                                <strong>Nama Peserta</strong>
                                {{ $siswa->nama_peserta }}
                            </div>

                            <div class="form-group">
                                <strong>Jenis Kelamin</strong>
                                {{ $siswa->jenis_kelamin }}
                            </div>

                            <div class="form-group">
                                <strong>Tempat Lahir</strong>
                                {{ $siswa->tempat_lahir }}
                            </div>

                            <div class="form-group">
                                <strong>Tanggal Lahir</strong>
                                {{ $siswa->tanggal_lahir }}
                            </div>

                            <div class="form-group">
                                <strong>Asal Sekolah</strong>
                                {{ $siswa->asal_sekolah }}
                            </div>

                            <div class="form-group">
                                <strong>Alamat Peserta</strong>
                                {{ $siswa->alamat_peserta }}
                            </div>
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
                            <div class="form-group">
                                <strong>Nama Ayah</strong>
                                {{ $siswa->nama_ayah }}
                            </div>

                            <div class="form-group">
                                <strong>Nama Ibu</strong>
                                {{ $siswa->nama_ibu }}
                            </div>

                            <div class="form-group">
                                <strong>Pekerjaan Ayah</strong>
                                {{ $siswa->pekerjaan_ayah }}
                            </div>

                            <div class="form-group">
                                <strong>Pekerjaan Ibu</strong>
                                {{ $siswa->pekerjaan_ibu }}
                            </div>

                            <div class="form-group">
                                <strong>Alamat Orang Tua</strong>
                                {{ $siswa->alamat_orangtua }}
                            </div>

                            <div class="form-group">
                                <strong>No HP Orang Tua</strong>
                                {{ $siswa->noHp_orangtua }}
                            </div>
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
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Pasphoto</label>
                                <div class="col-sm-10">
                                    <a href="{{ asset('public/storage/'. $siswa->pasphoto) }}" class="btn btn-xs btn-secondary">Show File</a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Akta Peserta</label>
                                <div class="col-sm-10">
                                    <a href="{{ asset('public/storage/' . $siswa->akta_peserta) }}" class="btn btn-xs btn-secondary">Show File</a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">KTP Orangtua</label>
                                <div class="col-sm-10">
                                    <a href="{{ asset('public/storage/' . $siswa->ktp_orangtua) }}" class="btn btn-xs btn-secondary">Show File</a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Kartu Keluarga</label>
                                <div class="col-sm-10">
                                    <a href="{{ asset('public/storage/' . $siswa->kartu_keluarga) }}" class="btn btn-xs btn-secondary">Show File</a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Raport</label>
                                <div class="col-sm-10">
                                    <a href="{{ asset('public/storage/' . $siswa->raport) }}" class="btn btn-xs btn-secondary">Show File</a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Sertifikat Prestasi</label>
                                <div class="col-sm-10">
                                    <a href="{{ asset('public/storage/' . $siswa->sertifikat_prestasi) }}" class="btn btn-xs btn-secondary">Show File</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Batas Tabel Form 3 --}}
            </div>
        </div>
    </div>
            <!-- / Content -->
            {{-- Button Verifikasi Status --}}
            <form action="{{ route('datapendaftar.update',$siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group" hidden>
                        <input type="text" name="status_pendaftaran" class="form-control" placeholder="NISN Peserta" value="Berkas Terverifikasi">
                    </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success link">Konfirmasi Status</button>
                </div>
            </form>
            {{-- End Of Button Verifikasi Status --}}

{{-- END of CONTENT --}}
 @endsection
