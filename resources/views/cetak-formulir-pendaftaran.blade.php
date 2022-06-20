@extends('template')
@section('header')
<span class="app-brand-text demo menu-text fw-bolder ms-2">Informasi Peserta</span>

@section('informasi')

<div class="form-group">
    <p align="center"><b>CETAK FORMULIR</b></p>
    <table class="static" align="center" rules="all" border="1px" style="width: 95;">
        <tr>
            <td class="text-center"></td>
            <td>{{ $siswa->nisn}}</td>
            <td>{{ $siswa->nik_peserta}}</td>
            <td>{{ $siswa->nama_peserta}}</td>
            <td>{{ $siswa->jenis_kelamin}}</td>
        </tr>

        {{-- @foreach ($sisw as $item) --}}

        @endforeach
    </table>
</div>


@endsection
@endsection
