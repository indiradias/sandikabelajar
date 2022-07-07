
@extends('template-admin')
@section('datapendaftar-show')

{{-- CONTENT --}}

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lihat Data Peserta</h1>
</div>
        {{-- Ini Untuk Konten --}}
        <div class="row mt-4 mb-4">
            <div class="col-sm-4 col-6">

            </div>
            <div >
                <span style="display: inline">
                    <a class="btn btn-secondary" style="width: 80px;" href="javascript:history.go(-1)">Kembali</a>
                </span>
                    {{-- <form action="{{ route('datapendaftar.update', $nisn) }}" method="post"
                        enctype="multipart/form-data"
                >
                     @method('PATCH')
                     @csrf
                <div class="form-group" hidden>
                    <input type="text" name="status_pendaftaran" class="form-control" placeholder="NISN Peserta" value="Terverifikasi">
                </div>
                <br>
                <span style="display: inline">
            <button type="submit" class="btn btn-success link">Konfirmasi Status</button>
        </span>
    </form> --}}
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

                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NISN Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nisn" value="{{ $nisn }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">NIK Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik_peserta" value="{{ $nik_peserta }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_peserta" value="{{ $nama_peserta }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Jenis Kelamin</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_kelamin" value="{{ $jenis_kelamin }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_lahir" value="{{ $tempat_lahir }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="tanggal_lahir" value="{{ $tanggal_lahir }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Asal Sekolah</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="asal_sekolah" value="{{ $asal_sekolah }}" disabled/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat Peserta</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_peserta" value="{{ $alamat_peserta }}" disabled/>
                          </div>
                        </div>
                      </form>
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

                        <form>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Ayah</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nama_ayah" value="{{ $nama_ayah }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Ibu</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nama_ibu" value="{{ $nama_ibu }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pekerjaan Ayah</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="$pekerjaan_ayah" value="{{ $pekerjaan_ayah }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pekerjaan Ibu</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="$pekerjaan_ibu" value="{{ $pekerjaan_ibu }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat Orangtua</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="alamat_orangtua" value="{{ $alamat_orangtua }}" disabled/>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">No Hp Orangtua</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                id="noHp_orangtua"
                                class="form-control phone-mask"
                                value="{{ $noHp_orangtua }}" disabled
                              />
                            </div>
                          </div>
                        </form>
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

                        <form>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Pasphoto</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $pasphoto) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Akta Peserta</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $pasphoto) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">KTP Orangtua</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $ktp_orangtua) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kartu Keluarga</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $kartu_keluarga) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Raport</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $raport) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Sertifikat Prestasi</label>
                            <div class="col-sm-10">
                                <a href="{{ asset('storage/' . $sertifikat_prestasi) }}" class="btn btn-xs btn-secondary">Show File</a>
                            </div>
                          </div>

                          {{-- Button Verifikasi Status --}}
                          {{-- <div class="row justify-content-end">
                            <div class="col-sm-8">
                             <div class="form-group" hidden>
                             <input type="text" name="status_pendaftaran" class="form-control" placeholder="NISN Peserta" value="Terverifikasi">
                             </div>
                            <br>
                                <span style="display: inline">
                                    <button type="submit" class="btn btn-success link">Konfirmasi Status</button>
                                </span>
                            </div>
                          </div> --}}
                          {{-- End Verifikasi Status --}}
                        </form>
                      </div>
                    </div>
                  </div>
                  {{-- Batas Tabel Form 3 --}}

              </div>
              </div>
            </div>
            <!-- / Content -->
            {{-- Button Verifikasi Status --}}
            <form action="{{ route('datapendaftar.update', $nisn) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                    <div class="form-group" hidden>
                        <input type="text" name="status_pendaftaran" class="form-control" placeholder="NISN Peserta" value="Terverifikasi">
                    </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success link">Konfirmasi Status</button>
                </div>
            </form>
            {{-- End Of Button Verifikasi Status --}}

{{-- END of CONTENT --}}
 @endsection
