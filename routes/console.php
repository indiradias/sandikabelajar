<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// 'nisn' => 'required',
//             'nik_peserta' => 'required',
//             'nama_peserta' => 'required',
//             'jenis_kelamin' => 'required',
//             'tempat_lahir' => 'required',
//             'tanggal_lahir' => 'required',
//             'asal_sekolah' => 'required',
//             'alamat_peserta' => 'required',
//             'nama_ayah' => 'required',
//             'nama_ibu' => 'required',
//             'nik_ayah' => 'required',
//             'nik_ibu' => 'required',
//             'pekerjaan_ayah' => 'required',
//             'pekerjaan_ibu' => 'required',
//             'alamat_orangtua' => 'required',
//             'noHp_orangtua' => 'required',

// <form action="{{ url()->current() }}" method="get">
//       <div class="row">
//       <div class="col-md-3">
//         <div class="input-group mb-4">
//         <input type="search" class="from-control" placeholder="Search..." name="keyword" value="{{ request('keyword') }}">
//         <button class="btn btn-success link" type="submit">Search</button>
//       </div>
//       </div>
//     </div>
//       </form>
