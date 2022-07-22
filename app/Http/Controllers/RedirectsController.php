<?php

namespace App\Http\Controllers;

use App\Models\penilaian;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectsController extends Controller
{
    public function index(Request $request)
    {
        $role=Auth::user()->role;
        $pagination  = 5;
        $jumlah = Siswa::count();
        $nilai = penilaian::with('siswa')->where('siswa_id', Auth::user()->id)->count();
        $keyword = $request->keywoard;

        if($role=='admin')
        {
            return view('dashboard.dashboard-admin', compact('jumlah', 'nilai'));
        }
        else{
            $siswa   = Siswa::where(function ($query) use ($keyword) {
                return $query
                    ->where('nama_peserta', 'like', "%".$keyword."%")
                    ->orWhere('nisn', 'like', "%".$keyword."%")
                    ->orWhere('nik_peserta', 'like', "%".$keyword."%");
            })->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate();

            return view('dashboard.dashboard-user', compact('siswa'));
        }
    }
}
