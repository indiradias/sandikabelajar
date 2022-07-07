<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Barryvdh\DomPDF\PDF;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class InformasiPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $role = Auth::user()->role;
        // $admin = Siswa::with('user')->where('id', Auth::user()->id)->get();
        // $peserta = Siswa::with('user')->where('id', Auth::user()->id)->count();

        // if ($role == 'admin')
        // {
        //     $admin = Siswa::orderBy('id', 'DESC')->get();
        //     return  view('datapendaftar-admin');
        // }
        // elseif($peserta >= 1)
        // {
        //     $peserta = $peserta;
        //     return view('informasi-peserta');
        // }
        return view('informasi-peserta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Siswa $sisw)
    {
        $sisw = Siswa::with('sisw')->get();
        return view('cetak-formulir-peserta', compact('sisw'));

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

    //untuk eksport PDF pada cetak formulir
    public function cetakformulir(Siswa $siswa){
        $siswa = Siswa::all();
        view()->share('peserta', $siswa);
        $pdf = PDF::loadview('cetak-formulir-pendaftaran.pdf');

        return $pdf->download('cetakformulir_peserta.pdf');
    }
}
