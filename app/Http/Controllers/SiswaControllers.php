<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sisw.create');
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
        // return $request->file('pasphoto')->store('pasphoto');

        $validatedData = $request->validate([
            'nisn' => 'required',
            'nik_peserta' => 'required',
            'nama_peserta' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'asal_sekolah' => 'required',
            'alamat_peserta' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nik_ayah' => 'required',
            'nik_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_orangtua' => 'required',
            'noHp_orangtua' => 'required',
            'status_pendaftaran' => 'Belum Terverifikasi',
            'pasphoto' => 'image|file|max:1024',
            'akta_peserta' => 'required|file|max:1024',
            'ktp_orangtua' => 'required|file|max:1024',
            'kartu_keluarga' => 'required|file|max:1024',
            'raport' => 'required|file|max:1024',
            'skhun' => 'required|file|max:1024',
        ]);

        if($request->file('pasphoto')) {
            $validatedData['pasphoto'] = $request->file('pasphoto')->store('pasphoto');
        }
        if($request->file('akta_peserta')) {
            $validatedData['akta_peserta'] = $request->file('akta_peserta')->store('akta_peserta');
        }
        if($request->file('ktp_orangtua')) {
            $validatedData['ktp_orangtua'] = $request->file('ktp_orangtua')->store('ktp_orangtua');
        }
        if($request->file('kartu_keluarga')) {
            $validatedData['kartu_keluarga'] = $request->file('kartu_keluarga')->store('kartu_keluarga');
        }
        if($request->file('raport')) {
            $validatedData['raport'] = $request->file('raport')->store('raport');
        }
        if($request->file('skhun')) {
            $validatedData['skhun'] = $request->file('skhun')->store('skhun');
        }

        Siswa::create($validatedData);

        return view('dashboard.dashboard-user')->with('succes','Data Berhasil di Input');
        //return redirect()->route('sisw.create')->with('succes','Pendaftaran Berhasil!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $sisw)
    {
        //
        return view('datapendaftar-show', [
            'siswa' => $sisw
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $sisw)
    {
        $sisw = Siswa::latest()->paginate(5);
        return view ('datapendaftar-edit', compact('datapendaftar-edit'));
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
    public function destroy(Siswa $sisw)
    {
        //
        // $sisw->delete();

        // return redirect()->route('datapendaftar-')->with('succes','Siswa Berhasil di Hapus');
    }
}
