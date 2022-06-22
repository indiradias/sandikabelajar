<?php

// use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RedirectsController;
use App\Http\Controllers\DataPendaftarController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\InformasiPesertaController;
use App\Http\Controllers\PembayaranPesertaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route untuk masuk sistem website
Route::get('/', function () {
    return view('home' , [
        "title" => "Home"
    ]);
});

//Route untuk manggil navbar home
Route::get('/home', function () {
    return view('home' , [
        "title" => "Home"
    ]);
});

//Route untuk manggil navbar panduan pendaftaran
Route::get('/panduan', function () {
    return view('panduan' , [
        "title" => "Panduan"
    ]);
});


Route::get('/redirects', [RedirectsController::class, 'index']); //Route redirect untuk multi auth

Route::get('/login', [LoginController::class, 'index']); //Route untuk menu login
Route::post('/login', [LoginController::class, 'authenticate']); //Route untuk mengolah data yg dikirim pd login
Route::post('/logout', [LoginController::class, 'logout']); //Route untuk logout

Route::get('/register', [RegisterController::class, 'index']);//->middleware('guest'); //Route untuk menu register, hnya bisa diakses olh user yg blm terauthentikasi(guest)
Route::post('/register', [RegisterController::class, 'store']); //Route untuk mengelola data yg dikirim pd register

//Route::get('/dashboard', [DashboardController::class, 'index']); //Route untuk ke halaman dashboard, hnya bisa diakses olh user yg sdh authentikasi (auth)

//untuk route dashboard mnngunakan closure (Admin)
Route::get('/dashboard-admin', function(){
    return view('dashboard.dashboard-admin');
});

//untuk route dashboard user
Route::get('/dashboard-user', function(){
    return view('dashboard.dashboard-user')->name('dashboard-user');
});

Route::resource('/datapendaftar', DataPendaftarController::class); //Route untuk ke menu data pendaftar (admin)
Route::resource('/penilaian', PenilaianController::class); //Route resource untuk penilaian

Route::get('/penilaian/inputnilai/{nisn}', [PenilaianController::class, 'create']);
Route::get('/penilaian/editnilai/{nisn}', [PenilaianController::class, 'edit']);

Route::resource('/sisw', SiswaControllers::class); //Route untuk menu pendaftaran(isi form peserta)

Route::get('/datapendaftar/show/{nisn}', [DataPendaftarController::class, 'show']);
Route::get('/datapendaftar/edit/{nisn}', [DataPendaftarController::class, 'edit']);
Route::post('/datapendaftar{sisw}', [DataPendaftarController::class, 'verifikasistatuspendaftaran']);

Route::get('/data-status', [DataPendaftarController::class, 'index']);
// Route::post('/data-status{nisn}', [DataPendaftarController::class, 'verifikasistatuspendaftaran']);

Route::resource('/informasi', InformasiPesertaController::class); //Route untuk menu informasi

Route::resource('/pembayaran', PembayaranPesertaController::class); //Route untuk menu Pembayaran





