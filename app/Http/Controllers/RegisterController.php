<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [ //untuk indikasi bhwa terdapat file register yg di dalamnya ada file  inde (ini ada pada view)
            'title' => 'Register'

        ]);
    }

    //methode store : untuk mengelol data register yg dkirimin (post)
    public function store(Request $request)
    {
        // validasi pada form register
        $validatedData = $request->validate([
            'role' => 'user',
            'name' => 'required|max:255',
            'username' =>'required', 'min :3', 'max:255', 'unique:users',
            'email' => 'required', //|email:dns|unique:users
            'password' => 'required|min:6|max:255'
        ]);

        //enkripsi password
        $validatedData['password'] = bcrypt($validatedData['password']);

        //untk simpan data register pda database
        User::create($validatedData);

        // return redirect()->intended('/redirect'); //untuk menampilkan halaman dashboard user
        // return view('dashboard.dashboard-user');
        // return view('login.index');
        return redirect('login');




    }
}
