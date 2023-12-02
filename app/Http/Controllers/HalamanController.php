<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;

class halamanController extends Controller
{
    function home() {
        return view('home');
    }

    function produk(){
        $produk = "Data Produk"

        $data = produk::all();

        return view('produk', ['Data Produk' => $produk, 'produk' => $data]);
    }

}