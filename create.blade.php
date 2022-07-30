@extends('template')

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

<form action="{{ route('sisw.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Data Peserta Template --}}
    <div class="container-xxl flex-grow-1 container-p-y">

              <div class="row">
                <!-- Data Peserta -->
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Data Peserta</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                      <div class="form-group">
                        <strong>NISN</strong>
                        <input type="text" name="nisn" class="form-control" placeholder="NISN" value="{{ old('nisn') }}">
                      </div>

                      <div class="form-group">
                        <strong>Nik peserta</strong>
                        <input type="text" name="nik_peserta" class="form-control" placeholder="Nik Peserta" value="{{ old('nik_peserta') }}">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Peserta</strong>
                            <input type="text" name="nama_peserta" class="form-control" placeholder="Nama Peserta" value="{{ old('nama_peserta') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Kelamin</strong>
                            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="{{ old('jenis_kelamin') }}">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tempat Lahir</strong>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tanggal Lahir</strong>
                            <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ old('tanggal_lahir') }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Asal Sekolah</strong>
                            <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah" value="{{ old('asal_sekolah') }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat Peserta</strong>
                            <textarea class="form-control" style="height:150px" name="alamat_peserta" placeholder="Dsn. RT/RW . Desa, Kec. Kab." value="{{ old('alamat_peserta') }}"></textarea>
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
                            <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" value="{{ old('nama_ayah') }}">
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Nama Ibu</strong>
                            <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" value="{{ old('nama_ibu') }}">
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Nik Ayah</strong>
                            <input type="text" name="nik_ayah" class="form-control" placeholder="Nik Ayah" value="{{ old('nik_ayah') }}">
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Nik Ibu</strong>
                            <input type="text" name="nik_ibu" class="form-control" placeholder="Nik Ibu" value="{{ old('nik_ibu') }}">
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Pekerjaan Ayah</strong>
                            <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" value="{{ old('pekerjaan_ayah') }}">
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Pekerjaan Ibu</strong>
                            <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" value="{{ old('pekerjaan_ibu') }}">
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>Alamat Orangtua</strong>
                            <textarea type="text" style="height:150px" name="alamat_orangtua" class="form-control" placeholder="Dsn. RT/RW . Desa, Kec. Kab." value="{{ old('alamat_orangtua') }}"></textarea>
                        </div>

                        <div class="form-group form-group-merge">
                            <strong>NoHp Orangtua</strong>
                            <input type="text" name="noHp_orangtua" class="form-control" placeholder="NoHp Orangtua" value="{{ old('noHp_orangtua') }}">
                        </div>
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
                    <strong>Pas Photo</strong>
                  <input type="file" class="form-control" id="pasphoto" name="pasphoto" />
                </div>

                <div class="form-group">
                    <strong>Akta Peserta</strong>
                  <input type="file" class="form-control" name="akta_peserta" />
                </div>

                <div class="form-group">
                    <strong>KTP Orangtua</strong>
                  <input type="file" class="form-control" name="ktp_orangtua" />
                </div>

                <div class="form-group">
                    <strong>Kartu Keluarga</strong>
                  <input type="file" class="form-control" name="kartu_keluarga" />
                </div>

                <div class="form-group">
                    <strong>Raport</strong>
                  <input type="file" class="form-control" name="raport" />
                </div>

                <div class="form-group">
                    <strong>Sertifikat Prestasi</strong>
                  <input type="file" class="form-control" name="skhun" />
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

