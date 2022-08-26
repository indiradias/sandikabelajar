@extends('layouts.Peserta')
@section('title-peserta')
    <title>Sistem PPDB | Formulir Pendaftaran</title>
@endsection
@section ('header')
<span class="app-brand-text demo menu-text fw-bolder ms-2">Form Pendaftaran</span>

@section('pendaftaran')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Data Peserta Template --}}
    <div class="container-xxl flex-grow-1 container-p-y">

              <div class="row">
                <p>*Wajib mengisi keseluruhan kolom pendaftaran. <br>Pendaftar Jalur 1 tidak diwajibkan unggah sertifikat prestasi. </p>
                <!-- Data Peserta -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Data Peserta</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                    <div class="form-group">
                        <strong>Tahun Ajaran</strong>
                        <input type="text" name="tahun_ajaran" class="form-control" placeholder="contoh: 2022/2023" value="{{ old('tahun_ajaran') }}" required>
                    </div>

                      <div class="form-group">
                        <strong>NISN</strong>
                        <input type="text" name="nisn" class="form-control" placeholder="NISN" value="{{ old('nisn') }}" required>
                      </div>

                      <div class="form-group">
                        <strong>Nik peserta</strong>
                        <input type="text" name="nik_peserta" class="form-control" placeholder="Nik Peserta" value="{{ old('nik_peserta') }}" required>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Peserta</strong>
                            <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta" value="{{ old('nama_peserta') }}" required>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Kelamin</strong>
                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                              </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tempat Lahir</strong>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tanggal Lahir</strong>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Asal Sekolah</strong>
                            <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" value="{{ old('asal_sekolah') }}" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat Peserta</strong>
                            <textarea class="form-control" style="height:150px" name="alamat_peserta" placeholder="Dsn. RT/RW . Desa, Kec. Kab." value="{{ old('alamat_peserta') }}" required></textarea>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
                {{-- End Of Data Peserta --}}

                <!-- Data Orangtua -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Data Orangtua</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                        <div class="form-group form-group-merge">
                            <strong>Nama Ayah</strong>
                            <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" value="{{ old('nama_ayah') }}" required>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Nama Ibu</strong>
                            <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" value="{{ old('nama_ibu') }}" required>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Nik Ayah</strong>
                            <input type="text" name="nik_ayah" class="form-control" placeholder="Nik Ayah" value="{{ old('nik_ayah') }}" required>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Nik Ibu</strong>
                            <input type="text" name="nik_ibu" class="form-control" placeholder="Nik Ibu" value="{{ old('nik_ibu') }}" required>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Pekerjaan Ayah</strong>
                            <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" value="{{ old('pekerjaan_ayah') }}" required>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Pekerjaan Ibu</strong>
                            <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" value="{{ old('pekerjaan_ibu') }}" required>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Alamat Orangtua</strong>
                            <textarea type="text" style="height:150px" name="alamat_orangtua" class="form-control" placeholder="Dsn. RT/RW . Desa, Kec. Kab." value="{{ old('alamat_orangtua') }}" required></textarea>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>NoHp Orangtua</strong>
                            <input type="text" name="noHp_orangtua" class="form-control" placeholder="NoHp Orangtua" value="{{ old('noHp_orangtua') }}" required>
                        </div>

                        {{-- <div class="col-md-7">
                            <div class="custom-control custom-radio custom-control-inline mt-2">
                              <input type="radio" id="asal_sekolah" name="jenis_sekolah" class="custom-control-input" value="SMP">
                              <label class="custom-control-label" for="asal_sekolah">SMP</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="asal_sekolah" name="jenis_sekolah" class="custom-control-input" value="MTs">
                              <label class="custom-control-label" for="asal_sekolah">MTs</label>
                            </div>
                        </div> --}}

                    </div>
                  </div>
                </div>
                {{-- End Of Data Orangtua --}}

        <!-- Upload Berkas Persyaratan -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <h5 class="card-header">Upload Berkas Persyaratan</h5>
              <div class="card-body demo-vertical-spacing demo-only-element">

                <div class="form-group">
                    <strong>Pas Photo (image)</strong>
                  <input type="file" class="form-control" id="pasphoto" name="pasphoto" required/>
                </div>

                <div class="form-group">
                    <strong>Akta Peserta (file/image)</strong>
                  <input type="file" class="form-control" name="akta_peserta" required />
                </div>

                <div class="form-group">
                    <strong>KTP Orangtua (file/image)</strong>
                  <input type="file" class="form-control" name="ktp_orangtua" required/>
                </div>

                <div class="form-group">
                    <strong>Kartu Keluarga (file/image)</strong>
                  <input type="file" class="form-control" name="kartu_keluarga" required/>
                </div>

                <div class="form-group">
                    <strong>Raport (image)</strong>
                  <input type="file" class="form-control" name="raport" required/>
                </div>

                <div class="form-group">
                    <strong>Sertifikat Prestasi (file/image)</strong> <span>*(Wajib diisi untuk pendaftaran gelombang 2)</span>
                  <input type="file" class="form-control" name="sertifikat_prestasi" />
                </div>
                {{-- End Of Upload Berkas Persyaratan --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
        {{-- Button --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        {{-- End Of Button --}}


</form>

@endsection
@endsection

