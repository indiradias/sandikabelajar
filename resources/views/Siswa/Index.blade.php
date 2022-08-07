@extends('layouts.Peserta')
@section('title-peserta')
    <title>Sistem PPDB | Berhasil Mendaftar</title>
@endsection
@section ('header')
<span class="app-brand-text demo menu-text fw-bolder ms-2">Form Pendaftaran</span>

@section('pendaftaran')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <main style="padding: 45px">
              <img
                  src="{{asset('public/assets/img/illustrations/page-misc-error-light.png')}}"
                  height="240" class="rounded mx-auto d-block"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/page-misc-error-light.png"
                  data-app-light-img="illustrations/page-misc-error-light.png"
                />
              <h3 style="padding: 50px" class="text-center">Lakukan Pembayaran Terlebih Dahulu <br>Sebelum Mengisi Formulir Pendaftaran Peserta Didik Baru</h3>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <a class="btn btn-primary text-center" href="{{ url ('/pembayaran') }}" class="btn btn-sm btn-success">Lanjutkan Pembayaran</a>
              </div>
            </main>
          </div>
        </div>
      </div>
  </div>
</div>

  @endsection
  @endsection
