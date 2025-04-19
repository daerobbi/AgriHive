<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_pengajuan;

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
    return view('V_landingpage');
});

Route::get('/pengajuan', function () {
    return view('Mitra\v_pengajuan');
});

Route::get('/katalog', [C_pengajuan::class, 'lihatprofil'])->name('v_katalog');

Route::get('/detailkatalog', [C_pengajuan::class, 'detailkatalog'])->name('v_detailkatalog');

Route::get('/formpengajuan', [C_pengajuan::class, 'formpengajuan'])->name('v_formpengajuan');

Route::get('/pengajuanterbaru', [C_pengajuan::class, 'pengajuanterbaru'])->name('v_pengajuanterbaru');
Route::get('/detailpengajuan', [C_pengajuan::class, 'detailpengajuan'])->name('v_detailpengajuan');
