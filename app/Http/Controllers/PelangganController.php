<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class LoginController extends Controller
{
function index(){
        $judul ="selamat datang";
         $pelanggan = DB::table('pelanggan')->get();
        $pelanggan = pelanggan::all();
        return view('/home',['Judul'=>$judul,'pelanggan'=>$pelanggan]);
    }  
}