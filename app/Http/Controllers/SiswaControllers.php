<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class SiswaControllers extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //buat di  menu informasi bagian (sedang berjalan)
        $siswa = Siswa::with('user')->where('user_id', Auth::user()->id)->get();
        return view('Siswa/Informasi', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::with('user')->where('user_id', Auth::user()->id)->count();
        if($siswa >= 1){
            return view('Siswa/Index2');
        }
        else{
            return view('Siswa/Create');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::insert([
            'user_id' => auth()->id(), //untuk ngambil id yg login
            'nisn' => $request -> input('nisn'),
            'nik_peserta' => $request -> input('nik_peserta'),
            'nama_peserta' => $request -> input('nama_peserta'),
            'jenis_kelamin' => $request -> input('jenis_kelamin'),
            'tempat_lahir' => $request -> input('tempat_lahir'),
            'tanggal_lahir' => $request -> input('tanggal_lahir'),
            'asal_sekolah' => $request -> input('asal_sekolah'),
            'alamat_peserta' => $request -> input('alamat_peserta'),
            'nama_ayah' => $request -> input('nama_ayah'),
            'nama_ibu' => $request -> input('nama_ibu'),
            'nik_ayah' => $request -> input('nik_ayah'),
            'nik_ibu' => $request -> input('nik_ibu'),
            'pekerjaan_ayah' => $request -> input('pekerjaan_ayah'),
            'pekerjaan_ibu' => $request -> input('pekerjaan_ibu'),
            'alamat_orangtua' => $request -> input('alamat_orangtua'),
            'noHp_orangtua' => $request -> input('noHp_orangtua'),
            'status_pendaftaran' => 'Belum Terverifikasi',
            'pasphoto' => $request -> file('pasphoto') ? $request -> file('pasphoto') -> store('pasphoto', 'public') : null,
            'akta_peserta' => $request -> file('akta_peserta') ? $request -> file('akta_peserta') -> store('akta_peserta', 'public') : null,
            'ktp_orangtua' => $request -> file('ktp_orangtua') ? $request -> file('ktp_orangtua') -> store('ktp_orangtua', 'public') : null,
            'kartu_keluarga' => $request -> file('kartu_keluarga') ? $request -> file('kartu_keluarga') -> store('kartu_keluarga', 'public') : null,
            'raport' => $request -> file('raport') ? $request -> file('raport') -> store('raport', 'public') : null,
            'sertifikat_prestasi' => $request -> file('sertifikat_prestasi') ? $request -> file('sertifikat_prestasi') -> store('sertifikat_prestasi', 'public') : null,
        ]);

        return view('Siswa/Index2')->with('succes','Data Berhasil di Input');
        //return redirect()->route('informasi-peserta')->with('succes','Data Berhasil di Input');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('Siswa/Show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //buat cetak formulir
        $siswa = Siswa::find($id);
        return view('Siswa/Cetak', compact('siswa'));
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


