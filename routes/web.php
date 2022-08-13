<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DosenController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function() {
    return view('mhs');
});

//dari controller
Route::get('/prodi/all', [ProdiController::class, 'index']);


//view langsung
Route::view('viewmhs', 'welcome');


//view portofolio
Route::view('portofolio', 'portofolio.cv');



//CRUD Data
Route::get('dosen', [DosenController::class, 'index']);
