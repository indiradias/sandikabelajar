<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectsController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='admin')
        {
            return view('dashboard.dashboard-admin');
        }
        else{
            return view('dashboard.dashboard-user');
        }
    }
}
