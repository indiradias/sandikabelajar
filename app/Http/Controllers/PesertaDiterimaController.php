<?php

namespace App\Http\Controllers;

use App\Models\penilaian;
use App\Models\Siswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //menambah descending pada sirtir nilai tertinggi ke terendah
        $sisw   = Siswa::orderBy('nilai_rata','DESC')->where(function ($query) use ($keyword) {
            return $query
                ->where('nama_peserta', 'like', "%" . $keyword . "%")
                ->orWhere('nisn', 'like', "%" . $keyword . "%")
                ->orWhere('nik_peserta', 'like', "%" . $keyword . "%")
               
                ;
        })->paginate($pagination);
        

        // $slotArray = [];
        // foreach ($sisw as $key => $siswa) {
        //     $nilai =DB::table('penilaians')
        //     ->join('siswas', 'penilaians.siswa_id', '=', 'siswas.id')
        //     ->select('siswas.nama_peserta','penilaians.*')
        //     ->orderBy('nilai_rata','desc')->get();


           
        //     // return collect([
        //     // $siswa->nilai = ($nilai[0]->nilai + $nilai[1]->nilai + $nilai[2]->nilai) / 3;
        //     // ]);
        // }
        // return $sisw;
        // penilaian::all()->sortBy('nilai');
        // $sisw = $sisw->sortBy("nilai");
        // $sisw = $sisw->sortBy("nilai");
        // dd($sisw);

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
    public function updates(Request $request, $id)
    {
      

        //update_status diterima

       $s= Siswa::where('id', $id)->first();

       $s->update(['status_pendaftaran' => 'Diterima']);

        // return $s;

        return redirect('pesertaditerima')
            ->with('success', 'Product updated successfully');
    }

    public function updates_ditolak(Request $request, $id)
    {
       
        //update ditolak

       $s= Siswa::where('id', $id)->first();

       $s->update(['status_pendaftaran' => 'Ditolak']);

        // return $s;

        return redirect('pesertaditerima')
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
    public function update_status(Request $request){
        if($request->ceklist){
            //melakukan update ceklist yg dipilih/all
            Siswa::whereIn('id', $request->ceklist)->update(['status_pendaftaran' => 'Diterima']);	
            return redirect()->back()->with('success','Data Berhasil di Update');
        }else{
            //jika tidak ada hanya redirect kosongan
            return redirect()->back();
        }
    }
}
