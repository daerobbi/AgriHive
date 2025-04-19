<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mitra\C_pengajuanAgen;
use App\Http\Controllers\rekantani\C_pengajuanrekan;

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
    return view('v_landingpage');
});

Route::get('/agen/pengajuan', function () {
    return view('Mitra\v_pengajuan');
});
Route::get('/rekantani/pengajuan', function () {
    return view('rekantani\v_pengajuan');
});
Route::get('/rekantani/katalog', function () {
    return view('rekantani\v_katalogrekan');
});
Route::prefix('mitra')->group(function () {
    Route::get('/agen/katalog', [C_pengajuanAgen::class, 'lihatprofil'])->name('v_katalog');
    Route::get('/agen/detailkatalog', [C_pengajuanAgen::class, 'detailkatalog'])->name('v_detailkatalog');
    Route::get('/agen/formpengajuan', [C_pengajuanAgen::class, 'formpengajuan'])->name('v_formpengajuan');
    Route::get('/agen/pengajuanterbaru', [C_pengajuanAgen::class, 'pengajuanterbaru'])->name('v_pengajuanterbaru');
    route::get('/agen/detailpengajuan', [C_pengajuanAgen::class, 'detailpengajuan'])->name('v_detailpengajuan');
});

Route::prefix('rekantani')->group(function () {
    Route::get('/rekantani/detailpengajuan', [C_pengajuanrekan::class, 'lihatdetailpengajuan'])->name('v_detailpengajuanRekan');
    Route::get('/rekantani/detailkatalog', [C_pengajuanrekan::class, 'detailkatalog'])->name('v_detailkatalogrekan');
    Route::get('/rekantani/tambahkatalog', [C_pengajuanrekan::class, 'tambahkatalog'])->name('v_tambahkatalog');
});
