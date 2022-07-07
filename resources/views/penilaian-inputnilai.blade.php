@extends('template-admin')
@section('inputnilai-admin')

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Input Nilai Tes Peserta</h1>
        </div>

      {{-- Ini Untuk Konten --}}
      <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <a class="btn btn-secondary wd-80" href="javascript:history.go(-1)">Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <form action="{{ route('sisw.update',$nisn) }}" method="POST">
        @csrf
        @method('PUT') --}}

        <form
            action="{{ route('penilaian.store') }}" method="post"
        >
            @csrf
            <input
                type="text"
                name="nisn"
                value="{{ $nisn }}"
                style="display:none;"
            >
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tes Wawancara</strong>
                    {{-- <input
                            type="text" name="tes_wawancara" class="form-control" placeholder="Tes Wawancara" value="{{ $tes_wawancara }}"
                        > --}}
                    <input
                        type="text"
                        name="tes_wawancara"
                        class="form-control"
                        placeholder="Masukkan Nilai"
                        required
                    >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tes Tulis</strong>
                    {{-- <input
                            type="text" name="tes_tulis" class="form-control" placeholder="Tes Tulis" value="{{ $tes_tulis}}"
                        > --}}
                    <input
                        type="text"
                        name="tes_tulis"
                        class="form-control"
                        placeholder="Masukkan Nilai"
                        required
                    >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tes Mengaji</strong>
                    {{-- <input
                            type="text" name="tes_mengaji" value="{{ $tes_mengaji }}" class="form-control" placeholder="Tes Mengaji"
                        > --}}
                    <input
                        type="text"
                        name="tes_mengaji"
                        required
                        class="form-control"
                        placeholder="Masukkan Nilai"
                    >
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success link">Simpan</button>

        </div>
        </div>
    </div>
    </form>


  </div>
</div>


  @endsection
