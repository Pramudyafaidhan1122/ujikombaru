<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// post menyimpan data       get nampilin data

Route::get('/login', function(){
    return "ini  login";
});
Route::get('/login', [LoginController::class, 'log']);
Route::get('/daftar', [LoginController::class, 'daftar']);
Route ::get('/home', [LoginController::class, 'index']);