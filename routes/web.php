<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;


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

//level index
Route::get('/level', [LevelController::class, 'index']);

//kategori
Route::get('/kategori', [KategoriController::class, 'index']);

//user Con
Route::get('/user',[UserController::class,'index'] );


Route::get('/user/tambah',[UserController::class,'tambah'] )->name('/user/tambah');

//ubah
Route::get('/user/edit/{id}',[UserController::class,'ubah'])->name('/user/ubah');

//hapus
Route::get('/user/delete/{id}',[UserController::class,'hapus'])->name('/user/hapus');

//users
Route::get('/users',[UserController::class,'index'] )->name('/users');

//tambah simpan
Route::post('/user/tambah_simpan',[UserController::class,'tambah_simpan'])->name('/user/tambah_simpan');

//ubah simpan
Route::post('/user/ubah_simpan', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');


