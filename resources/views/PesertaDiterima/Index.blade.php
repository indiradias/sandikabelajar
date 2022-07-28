@extends('layouts.Admin')
@section('title-admin')
    <title>Sistem PPDB | Peserta Diterima</title>
@endsection
@section('peserta-diterima-admin')
{{-- CONTENT --}}


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Peserta Diterima</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-calculator fa-sm text-white-50"></i> Generate Nilai</a>
</div>

{{-- Menu Search--}}
<form action="{{ url()->current() }}" method="get">
  <div class="row-mb-2">
    <div class="col-mb-3">
      <div class="input-group mb-4">
        <input type="search" class="from-control" placeholder="search..." name="keywoard" value="{{ request('keyword') }}">
        <button class="btn btn-success link" type="submit">Search</button>
      </div>
    </div>
  </div>
</form>
  {{-- End Off Menu Search --}}

  {{-- Tampilan Tabel Data Pendaftar --}}
  <div class="card-body">

    <div class="table-responsive text-nowrap">
      @if ($message = Session::get('succes'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
   
      <div class="row form-group gap-1 d-md-flex justify-content-end card-header ">
        <form class="form" id="formkirim" method="POST" action="{{url('update_status')}}">
          @csrf
          <div class="container">
            <div class="row">

              <div class="isiCekAll">

              </div>

              <div class="col-sm-2">
                <label for="">
                  <input type="checkbox"  id="checkall"> <span class="badge badge-pill badge-warning text-wrap" style="height:20px; width: 7rem;">Pilih Semua</span>
                </label>
              </div>

              <div class="col-sm-2">
                <label for=""></label>
                <button id="button-kirim" type="button" class="btn btn-sm btn-info ml-2">
                  Terima</button>
              </div>
            </div>

        </form>
      </div>

      <table class="table table-bordered table-striped table-hover">
     
      
        <thead>
          <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nik Peserta</th>
            <th>Nama Peserta</th>
            <th>Jenis Kelamin</th>
            <th>Nilai Akhir</th>
            <th>Status Peserta</th>
            <th class="text-center">Aksi</th>
            <th></th>
          </tr>
        </thead>

        @foreach ($sisw as $index => $siswa)

        <tr>
          <td>{{ $index + $sisw->firstItem() }}</td>
          <td>{{ $siswa->nisn}}</td>
          <td>{{ $siswa->nik_peserta}}</td>
          <td>{{ $siswa->nama_peserta}}</td>
          <td>{{ $siswa->jenis_kelamin}}</td>
          <td>
            {{ $siswa->nilai_rata }}
            <i class="fe fe-info"></i>
          </td>
          <td>{{ $siswa->jenis_kelamin}}</td>

          {{-- Action --}}
          <td class="text-center">
            @if($siswa->status_pendaftaran == 'Diterima')
            <a class="btn btn-success" href="{{url('pesertaditerimas',$siswa->id) }}" class="btn btn-sm btn-warning">Diterima</a>
            @elseif($siswa->status_pendaftaran == 'Ditolak')
            <a class="btn btn-warning" href="{{url('pesertaditerimas-ditolak',$siswa->id) }}" class="btn btn-sm btn-warning">Ditolak</a>

            @else
            <!-- <a class="btn btn-success" href="{{ route('pesertaditerima.edit',$siswa->id) }}" class="btn btn-sm btn-warning">Diterima</a>
            <a class="btn btn-warning" href="/peserta/ditolak/{{ $siswa->nisn}}" class="btn btn-sm btn-warning">Ditolak</a> -->

            <a class="btn btn-success" href="{{url('pesertaditerimas',$siswa->id) }}" class="btn btn-sm btn-warning">Diterima</a>
            <a class="btn btn-warning" href="{{url('pesertaditerimas-ditolak',$siswa->id) }}" class="btn btn-sm btn-warning">Ditolak</a>
            @endif
          </td>

          <td>
            <div class="check">
              <label for="">
                <input type="checkbox" name="cek[]" value="{{$siswa->id}}" class="checkitem">
              </label>
            </div>
          </td>
        {{-- @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> --}}
        {{-- </form>
        </td> --}}
        </tr>
        @endforeach
      </table>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        {!! $sisw->links() !!}
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start text-gray-600 fs-6">
        <p>Menampilkan</p>
        {{ $sisw->firstItem() }}
        <p>-</p>
        {{ $sisw->lastItem() }}
        <p>dari</p>
        {{ $sisw->total() }}
        <p>data</p>
      </div>

    </div>
  </div>

  {{-- End Of Tampilan Tabel Data Pendaftar --}}
  {{-- END of CONTENT --}}

  @endsection
  @section('js')
  <script>
    // fungsi saat ingin di check all atau dipilih semua
    $("#checkall").change(function() {
      $(".checkitem").prop("checked", $(this).prop("checked"))
    })
    // berfungsi untuk mengubah beberapa item checkbox terpilih(checklist) semua atau tidak terpilih (unchecklist)
    $(".checkitem").change(function() {
      if ($(this).prop("checked") == false) {
        $("#checkall").prop("checked", false)
      }
      // saat beberapa item terpilih dan hampir semua maka akan pada checkbox yang memiliki id CHECKALL terchecklist
      if ($(".checkitem:checked").length == $(".checkitem").length) {
        $("#checkall").prop("checked", true)
      }
    })


    $("#button-kirim").on('click', ()=>{
        cekAll();
    });	

    function  cekAll(){

      let data = [];
      $('.isiCekAll').empty()
      $("[name='cek[]']:checked").each(function( index,el ) {
        data.push( $(el).val() );
      $('.isiCekAll').append(`
        <input type="string" class="d-none" name="ceklist[]" value="${$(el).val()}">`)
      });

      $('#formkirim').submit();

    }

  </script>
  @endsection