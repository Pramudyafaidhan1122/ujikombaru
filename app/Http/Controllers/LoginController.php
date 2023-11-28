<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function log()
    {
        $login = "Login";

        return view('login', ['login' => $login]);
    }

    function daftar()
    {
        $daftar = "daftar";

        return view('daftar', ['daftar' => $daftar]);
    }

    
}
