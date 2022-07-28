<?php

use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\PembayaranPesertaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('xendit/va/list', 'PembayaranPesertaController@index'); //untuk testing list VA gateway
Route::post('/pembayaran/notif', [PaymentGatewayController::class, 'payment_post']); //Route untuk mnotif jika berhasil bayar dll