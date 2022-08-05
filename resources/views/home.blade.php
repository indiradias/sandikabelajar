@extends('layouts.main')
@section('container')

    <br><br>
    <div class="card transparent-card">
            <div class="bootstrap-carousel">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('public/PPDB/images/ppdb1.jpeg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('public/PPDB/images/ppdb2.jpeg') }}"
                                alt="Second slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-xs"> --}}
        {{-- PRESTASI --}}
        {{-- <div class="mt-4 p-5 bg-light rounded row center">
            <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 4px">
                <div class="" style="border-radius: 0%;">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-content">
                                <img class="img-fluid w-auto" src="{{ asset('public/PPDB/images/AlurPPDB.png') }}" alt="">
                            </div>
                        </div>
                    </div>
            </div> --}}
            {{-- <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 4px">
                <div class="card" style="border-radius: 0%">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="{{ asset('public/PPDB/images/juara3.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 4px">
                <div class="card" style="border-radius: 0%">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="{{ asset('public/PPDB/images/juaraadzan.png') }}" alt="">
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 4px">
                <div class="card" style="border-radius: 0%">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="{{ asset('public/PPDB/images/juara1.png') }}" alt="">
                            </div>
                        </div>
                </div>
            </div> --}}

            {{-- </div>
        </div> --}}

        {{-- End of PRESTASI --}}

        {{-- Ketentuan Pendaftaran --}}
        <div class="row">
            <div class="card transparent-card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="{{ asset('public/PPDB/images/ketentuan.png') }}" alt="">
                                            </div>

                                        </div>

                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h3>Ketentuan Pendaftaran</h3>
                                                <p class="text-content">Alur dan Waktu Pendaftaran</p>
                                                    <div class="custom-tab-1">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item"><a href="#gelombang1" data-bs-toggle="tab" class="nav-link active show">Gelombang I</a></li>
                                                        <li class="nav-item"><a href="#gelombang2" data-bs-toggle="tab" class="nav-link ">Gelombang II</a></li>
                                                    </ul>

                                                    <div class="profile-tab">
                                                    <div class="tab-content">
                                                        <div id="gelombang1" class="tab-pane fade active show">
                                                            <div class="profile-personal-info">
                                                                <h6><br>Gelombang I Jalur Tes Tulis dan Wawancara </h6>
                                                                <h6>Pelaksanaan : 01 November 2022 - 31 Maret 2023</h6>
                                                                <li>Tes Masuk (03 April 2023)</li>
                                                                <li>Wawancara (04 - 05 April 2023)</li>
                                                                <li>Pengumuman (10 April 2023)</li>
                                                                <li>MOS (Jadwal Menyusul)</li>
                                                            </div>
                                                        </div>

                                                        <div id="gelombang2" class="tab-pane fade show">
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
                                                    </div>
                                                    <br>

                                                    <td class="text-center">
                                                        <a class="btn btn-warning {{ ($title === "Panduan") }}" href="PPDB/images/panduan.png" id="panduan">Panduan Pendaftaran</a>
                                                    </td>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection


{{-- Footer --}}
<div class="footer">
    <div class="copyright">
        <p>Copyright ©
            <script>
                document.write(new Date().getFullYear())
            </script> <br>
        </p>
    </div>
</div>
{{-- End of Footer --}}
{{-- </div> --}}

