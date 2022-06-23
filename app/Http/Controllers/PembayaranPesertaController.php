<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;

use Illuminate\Http\Request;
// use Xendit\Xendit;

use function PHPUnit\Framework\returnSelf;

class PembayaranPesertaController extends Controller
{
    private $token = 'xnd_public_development_Jh6ss6C9hjYo7HKZTxQDNDyhoQBREeMGH6eWpVcLdS2ChK5ky5H9RdWThRxGnL';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Siswa $request)
    {
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-8wZQXbq4lM2yfqrn_JZF9eMM';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

           $params = array(
               'transaction_details' => array(
                   'order_id' => rand(),
                   'gross_amount' => 300000,
               ),
               'customer_details' => array(
                   'name' => 'budi',
                   'email' => 'indira@gmail.com',
               )
            );

               $snapToken = \Midtrans\Snap::getSnapToken($params); //transaction token ($snapToken)

               return view('pembayaran-peserta', ['snap_token'=>$snapToken]);
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
