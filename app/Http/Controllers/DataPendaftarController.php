<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;



class DataPendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination  = 10;
        $sisw   = Siswa::when($request->keyword, function ($query) use ($request) {
        return $query
            ->where('nama_peserta', 'like', "%{$request->keyword}%");
        })->orderBy('created_at', 'desc')->paginate($pagination);

         $sisw->appends($request->only('keyword'));

        //  return view('datapendaftar-admin', [
        // 'nisn'    => 'nisn',
        // 'nama_peserta' => $sisw,
        //  ])->with('i', ($request->input('page', 1) - 1) * $pagination);

        // $sisw = Siswa::latest()->paginate(5);
        return view ('datapendaftar-admin',compact('sisw'))->with('i', (request()->input('page', 1) -1) * 10);

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
        $request->validate([
            'nisn' => 'required',
            'nik_peserta' => 'required',
            'nama_peserta' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|numeric',
            'asal_sekolah' => 'required',
            'alamat_peserta' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nik_ayah' => 'required|numeric',
            'nik_ibu' => 'required|numeric',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_orangtua' => 'required',
            'noHp_orangtua' => 'required|numeric',
            // 'pasphoto' => 'required',
            // 'akta_peserta' => 'required',
        ]);
        Siswa::create($request->all());

        return redirect()->route('datapendaftar-admin')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $nisn)
    {
        return view('datapendaftar-show', $nisn);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $nisn)
    {

        //$siswa = Siswa::findOrFail($nisn);
        return view('datapendaftar-edit', $nisn);
        // $sisw = [
        //     'siswa' => $this->Siswa->editData(),
        // ];
        // return view('datapendaftar-edit', $sisw);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nisn)
    {
        // $request->validate([
        //     'nisn' => $nisn,
        //     'nik_peserta' => 'required',
        //     'nama_peserta' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'asal_sekolah' => 'required',
        //     'alamat_peserta' => 'required',
        //     'nama_ayah' => 'required',
        //     'nama_ibu' => 'required',
        //     'nik_ayah' => 'required|numeric',
        //     'nik_ibu' => 'required|numeric',
        //     'pekerjaan_ayah' => 'required',
        //     'pekerjaan_ibu' => 'required',
        //     'alamat_orangtua' => 'required',
        //     'noHp_orangtua' => 'required|numeric',
        // ]);

        // $sisw = Siswa::where('nisn', $nisn)->firstOrFail();
        // $sisw->nisn = $nisn;
        // $sisw->nama_peserta = $request->get('nama_peserta');
        // $sisw->alamat_peserta = $request->get('alamat_peserta');
        // $sisw->save();

        // return redirect()
        // ->route('datapendaftar.index')
        // ->with('succes','Data Pendaftar Berhasil di Update!!');

        Siswa::where("nisn", $nisn)->update([
            'status_pendaftaran' => $request->status_pendaftaran,
        ]);

        return redirect()->route('datapendaftar.index');
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

    public function verifikasistatuspendaftaran(Siswa $nisn){


    }

    public function notverifikasistatuspendaftaran(Siswa $nisn){

        Siswa::where("nisn", "$nisn")->update([
            'status_pendaftaran' => "Belum Terverifikasi"
        ]);
        Siswa::create([
            'nisn' => $nisn,
            'status' => "belum di verifikasi"
        ]);
        return redirect('/data-status');
    }

    public function invalidstatuspendaftaran(Siswa $nisn){

        Siswa::where("nisn", "$nisn")->update([
            'status_pendaftaran' => "Tidak Sah"
        ]);
        Siswa::create([
            'nisn' => $nisn,
            'status' => "tidak sah"
        ]);
        return redirect('/data-status');
    }

}
