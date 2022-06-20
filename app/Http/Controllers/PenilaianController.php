<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use App\Models\penilaian;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination  = 5;
        $keyword = $request->keywoard;
        $sisw   = Siswa::where(function ($query) use ($keyword) {
            return $query
            ->where('nama_peserta', 'like', "%".$keyword."%")
            ->orWhere('nisn', 'like', "%".$keyword."%")
            ->orWhere('nik_peserta', 'like', "%".$keyword."%");
        })->orderBy('created_at', 'desc')->paginate($pagination);

        // $sisw->appends($request->only('keyword'));

        // set perhitungan nilai rata-rata dari 3 jenis test
        foreach ($sisw as $key => $siswa) {
            $nilai = $siswa->getPenilaian()->get();
            if (!empty($nilai[0]))
                $siswa->nilai = ($nilai[0]->nilai + $nilai[1]->nilai + $nilai[2]->nilai) / 3;
            else
                $siswa->nilai = 0;
        }
        // $sisw = $sisw->orderBy("nilai");

        return view ('penilaian-admin',compact('sisw'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nisn)
    {
        return view('penilaian-inputnilai', ['nisn' => $nisn]);
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
            'tes_wawancara' => 'required',
            'tes_tulis' => 'required',
            'tes_mengaji' => 'required'
        ]);

        $penilaian = [
            [
                'nisn' => $request->get('nisn'),
                'nilai' => $request->get('tes_wawancara'),
                'jenis_tes_id' => 1, // wawancara
            ],
            [
                'nisn' => $request->get('nisn'),
                'nilai' => $request->get('tes_tulis'),
                'jenis_tes_id' => 2, // tulis
            ],
            [
                'nisn' => $request->get('nisn'),
                'nilai' => $request->get('tes_mengaji'),
                'jenis_tes_id' => 3, // mengaji
            ]
        ];


        penilaian::insert($penilaian);


        return redirect('penilaian')->with('succes','Data Nilai Berhasil di Input');
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
    public function edit($nisn)
    {

        //return view('penilaian-inputnilai', ['nisn' => $nisn]);
        return view('penilaian-editnilai', ['nisn' => $nisn]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nisn)
    {
        $pendaftar   = Siswa::where('nisn', '=', $nisn)->firstOrFail();
        return json_encode($pendaftar->getPenilaian()->getModel());
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
