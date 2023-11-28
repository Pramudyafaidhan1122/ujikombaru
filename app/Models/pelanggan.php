<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pelanggan";

   // protected $fillable =['tgl_pengaduan','nik','isi_laporan','foto','status'];
}