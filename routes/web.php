<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\WelcomeController;



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



//level index
Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/add', [LevelController::class, 'add'])->name('/level/add');
Route::post('/level/add_save', [LevelController::class, 'add_save'])->name('/level/add_save');

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

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/create', [KategoriController::class, 'create']);

Route::post('/kategori', [KategoriController::class, 'store']);


Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::put('/kategori/update_save/{id}', [KategoriController::class, 'update_save'])->name('kategori.update_save');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

Route::resource('m_user', POSController::class);


Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

