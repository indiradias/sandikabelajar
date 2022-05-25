<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [ //ada pada file view > login > index
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        //validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //ngecek gagal/tidak proses login dg mengirimkan pesan eror
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate(); //mnggunakan 'session' untk mnghindari hacker (keamanan sistem)
            return redirect()->intended('/redirects');
        }

        //jika login gagal
        return back()->with('LoginError', 'Login gagal!');

        //dd('berhasil login');
    }

    //method untuk menu logout
    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');
    }
}
