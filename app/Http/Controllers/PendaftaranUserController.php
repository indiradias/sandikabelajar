<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Http\Request;

class PendaftaranUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pendaftaran-user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $validatedData = $request->validate([
            'nisn' => 'required',
            'nik_peserta' => 'required',
            'nama_peserta' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'alamat_peserta' => 'required',
            'nama_ayah' => 'required|max:25',
            'nama_ibu' => 'required|max:25',
            'nik_ayah' => 'required',
            'nik_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_orangtua' => 'required',
            'noHp_orangtua' => 'required',
         ]);


        //$validatedData['user_id'] = auth()->user()->id; //ngambil data user
        //pendaftaran::create($request->all());
        pendaftaran::create($validatedData); //insert dg panggil modelnya (pendaftaran)

        return redirect()->route('pendaftaran-user')->with('success', 'Pendaftaran Berhasil'); //balikin ke halaman pendaftaran


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftaran $pendaftaran)
    {
        //
    }
}
