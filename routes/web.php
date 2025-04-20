<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mitra\C_pengajuanAgen;
use App\Http\Controllers\rekantani\C_pengajuanrekan;
use App\Http\Controllers\rekantani\c_katalog;
use App\Http\Controllers\admin\c_pengajuanadmin;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('v_landingpage');
});

Route::get('/admin/pengajuan', function () {
    return view('admin\v_pengajuan');
});

Route::get('/agen/pengajuan', function () {
    return view('Mitra\v_pengajuan');
});

Route::get('/rekantani/pengajuan', function () {
    return view('rekantani\v_pengajuan');
});

Route::get('/rekantani/katalog', [c_katalog::class, 'index'])->name('rekantani.katalog');

Route::prefix('mitra')->group(function () {
    Route::get('/agen/katalog', [C_pengajuanAgen::class, 'lihatprofil'])->name('v_katalog');
    Route::get('/agen/detailkatalog', [C_pengajuanAgen::class, 'detailkatalog'])->name('v_detailkatalog');
    Route::get('/agen/formpengajuan', [C_pengajuanAgen::class, 'formpengajuan'])->name('v_formpengajuan');
    Route::get('/agen/pengajuanterbaru', [C_pengajuanAgen::class, 'pengajuanterbaru'])->name('v_pengajuanterbaru');
    route::get('/agen/detailpengajuan', [C_pengajuanAgen::class, 'detailpengajuan'])->name('v_detailpengajuan');
});

Route::prefix('rekantani')->group(function () {
    Route::get('/rekantani/detailpengajuan', [C_pengajuanrekan::class, 'lihatdetailpengajuan'])->name('v_detailpengajuanRekan');
});
Route::prefix('rekantani')->group(function () {
    Route::delete('{id}',[c_katalog::class, 'delete'])->name('rekantani.katalog.delete');
    Route::get('/rekantani/{id}/detailkatalog', [C_katalog::class, 'detailkatalog'])->name('v_detailkatalogrekan');
    Route::get('/rekantani/tambahkatalog', [C_katalog::class, 'tambahkatalog'])->name('v_tambahkatalog');
});

Route::prefix('admin')->group(function () {
    Route::get('/admin/detailpengajuan', [c_pengajuanadmin::class, 'detailpengajuan'])->name('v_detailpengajuanadmin');
});
