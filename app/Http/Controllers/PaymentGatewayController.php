<?php

namespace App\Http\Controllers;

use App\Models\jenis_tes;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentGatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //melalkukan pengecekan status pembayaran
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        if ($siswa->pembayaran == 'terbayar') {
            //jika terbayar ke halaman pendaftaran isi form atau bisa di ubah

            return redirect('siswa/create');
        } else {
            //jika belum maka melakukan konfig auth  buat merubah status
            $siswa = Siswa::where('user_id', auth()->user()->id)->first();

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-yevKPKteoNfyXzY7NjJlUDof';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;
            $order_id = Str::random(5);

            $siswa->update([
                'pembayaran' => 'terkirim',
                'order_id' => $order_id,
            ]);
            $params = array(
                'transaction_details' => array(
                    'order_id' => $siswa->order_id,
                    // 'order_id' => $order_id,

                    'gross_amount' => 300000,
                ),
                'customer_details' => array(
                    'first_name' => auth()->user()->name,
                    'last_name' => '',
                    'email' => auth()->user()->email,
                    'phone' => $siswa->noHp_orangtua,
                ),
            );



                //bentuk cart yang akan dikirim ke midtrans
            $snapToken = \Midtrans\Snap::createTransaction($params);
            // return $snapToken;
            //kembalian nilai token untuk melakukaan pembayaran
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            // return $snapToken;

            return view('paymentgateway', ['snap_token' => $snapToken]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }

    public function payment_post(Request $request)
    {
        //setting key server midtrans ya
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-yevKPKteoNfyXzY7NjJlUDof';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        //mengambil response dari midtrans
        $payload = $request->getContent();
        //melakukan parsing response dari midtrans
        $notification = json_decode($payload);
        // $json = json_decode($request->get('json')); //nama json dipanggil dari token yg awto kepanggil dari API
        // $order = new Siswa();


        //melakukan pengecekan status transaksi
        if ($notification->transaction_status == "settlement") {

            //mencari siswa berdasarkan order_id
            $siswa = Siswa::where('order_id', $notification->order_id)->first();

            //melakukan update pada siswa
            $s = [
                'pembayaran' => 'terbayar',
                'transaction_id' => $notification->transaction_id,
                // 'order_id' => $notification->order_id,
            ];
            //update pada siswa
            $siswa->update($s);
            // dd($notification);

            // return redirect('/siswa/create')->with('success', 'Pembayaran Berhasil');
        } else {
            //selain settlemned menunggu untuk melakukan pembayaran
            return 'menunggu pembayaran';
        }


    }
}
