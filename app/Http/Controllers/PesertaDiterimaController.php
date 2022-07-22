<?php

namespace App\Http\Controllers;

use App\Models\penilaian;
use App\Models\Siswa;

use Illuminate\Http\Request;

class PesertaDiterimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //menu search
        $pagination  = 5;
        $keyword = $request->keywoard;
        $sisw   = Siswa::where(function ($query) use ($keyword) {
            return $query
                ->where('nama_peserta', 'like', "%" . $keyword . "%")
                ->orWhere('nisn', 'like', "%" . $keyword . "%")
                ->orWhere('nik_peserta', 'like', "%" . $keyword . "%");
        })->paginate($pagination);

        foreach ($sisw as $key => $siswa) {
            $nilai = $siswa->getPenilaian()->get();
            $siswa->nilai = ($nilai[0]->nilai + $nilai[1]->nilai + $nilai[2]->nilai) / 3;
        }

        $sisw = $sisw->sortBy("nilai");
        dd($sisw);
        return view('PesertaDiterima/Index', compact('sisw'))->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function store(Siswa $sisw)
    {
        //
        // $sisw = Siswa::all();
        // $sorted = $sisw->SortByDesc('nilai');

        // return redirect()->route('peserta-diterima')->$sorted->values()->all();

        // return redirect()->route('datapendaftar-admin')->with('succes','Data Berhasil di Input');
        //return view ('peserta-diterima',compact('sisw'))->with('i', (request()->input('page', 1) -1) * 5);
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
        $request->validate([
            'status_pendaftaran' => 'required',
        ]);

        Siswa::where('id', $id)->update(['status_pendaftaran' => $request->status_pendaftaran]);

        return redirect()->route('PesertaDiterima/Index')
            ->with('success', 'Product updated successfully');
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
