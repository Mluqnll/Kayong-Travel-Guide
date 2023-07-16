<?php

use App\Http\Controllers\Admin\TamanNasionalController;
use App\Http\Controllers\Web\WebTamanNasionalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PengelolaController;
use App\Http\Controllers\Admin\DesaWisataController;
use App\Http\Controllers\Admin\AtraksiWisataController;
use App\Http\Controllers\Admin\KalenderWisataController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\KategoriFasilitasController;
use App\Http\Controllers\Admin\FasilitasController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\WebDesaWisataController;
use App\Http\Controllers\Web\WebKontakWisataController;
use App\Http\Controllers\Web\WebKalenderWisataController;
use App\Http\Controllers\Web\WebPetaWisataController;
use App\Http\Controllers\Web\WebAtraksiWisataController;
use App\Http\Controllers\Web\WebFasilitasController;

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



Route::prefix('admin')->middleware('auth')->group(function(){

    Route::resource('/', AdminController::class);

    Route::resource('pengelola', PengelolaController::class);

    Route::resource('taman', TamanNasionalController::class);

    Route::resource('desa-wisata', DesaWisataController::class);



    Route::resource('atraksi-wisata', AtraksiWisataController::class);
    Route::get('atraksi-wisata/show-atraksi-wisata/{atraksi_wisata}', [AtraksiWisataController::class, 'detail']);

    Route::resource('kalender-wisata', KalenderWisataController::class);

    Route::resource('kontak', KontakController::class);

    Route::resource('kategori', KategoriController::class);

    Route::resource('detail', DetailController::class);

    Route::resource('kategori-fasilitas', KategoriFasilitasController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::get('fasilitas/create/{kategori_fasilitas}', [FasilitasController::class, 'create']);
    Route::get('fasilitas/show-fasilitas/{fasilitas}', [FasilitasController::class, 'detail']);

});

Route::post('store-bulan', [KalenderWisataController::class, 'storeBulan']);


Route::resource('/', WebDesaWisataController::class);
Route::resource('desa-wisata', WebDesaWisataController::class);
Route::resource('taman', WebTamanNasionalController::class);
Route::resource('kontak-wisata', WebKontakWisataController::class);
Route::resource('kalender-wisata', WebKalenderWisataController::class);
Route::resource('peta-wisata', WebPetaWisataController::class);

Route::get('fasilitas/{kategori_fasilitas}',[WebFasilitasController::class,'index']);
Route::get('fasilitas-wisata/{fasilitas}',[WebFasilitasController::class,'show']);

Route::get('atraksi/{kategori}',[WebAtraksiWisataController::class,'index']);
Route::get('atraksi-wisata/{atraksi_wisata}',[WebAtraksiWisataController::class,'show']);


Route::get('durian', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

