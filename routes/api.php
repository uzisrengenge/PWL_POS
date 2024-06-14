<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\LevellController;

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\UserrController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::post('/register1', RegisterController::class)->name('register');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', LogoutController::class)->name('logout');

Route::middleware('auth:api')->get('levels', [LevellController::class, 'index']);
Route::middleware('auth:api')->post('levels', [LevellController::class, 'store']);
Route::middleware('auth:api')->get('levels/{level}', [LevellController::class, 'show']);
Route::middleware('auth:api')->put('levels/{level}', [LevellController::class, 'update']);
Route::middleware('auth:api')->delete('levels/{level}', [LevellController::class, 'destroy']);



Route::middleware('auth:api')->get('user', [UserrController::class, 'index']);
Route::middleware('auth:api')->post('user', [UserrController::class, 'store']);
Route::middleware('auth:api')->get('user/{user}', [UserrController::class, 'show']);
Route::middleware('auth:api')->put('user/{user}', [UserrController::class, 'update']);
Route::middleware('auth:api')->delete('user/{user}', [UserrController::class, 'destroyy']);

Route::middleware('auth:api')->get('barang', [BarangController::class, 'index']);
Route::middleware('auth:api')->post('barang', [BarangController::class, 'store']);
Route::middleware('auth:api')->get('barang/{barang}', [BarangController::class, 'show']);
Route::middleware('auth:api')->put('barang/{barang}', [BarangController::class, 'update']);
Route::middleware('auth:api')->delete('barang/{barang}', [BarangController::class, 'destroy']);

Route::middleware('auth:api')->get('kategori', [KategoriController::class, 'index']);
Route::middleware('auth:api')->post('kategori', [KategoriController::class, 'store']);
Route::middleware('auth:api')->get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::middleware('auth:api')->put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::middleware('auth:api')->delete('kategori/{kategori}', [KategoriController::class, 'destroy']);
