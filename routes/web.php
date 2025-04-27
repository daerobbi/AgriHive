<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mitra\C_pengajuanAgen;
use App\Http\Controllers\rekantani\C_pengajuanrekan;
use App\Http\Controllers\rekantani\c_katalog;
use App\Http\Controllers\admin\c_pengajuanadmin;
use App\Http\Controllers\Auth\RegisteredUserController;

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
    return view('auth.login');
});

// Pendaftaran Rekantani
Route::get('/register/rekantani', [RegisteredUserController::class, 'createRekantani'])->name('register.rekantani');
Route::post('/register/rekantani', [RegisteredUserController::class, 'storeRekantani']);

// Pendaftaran Agen
Route::get('/register/agen', [RegisteredUserController::class, 'createAgen'])->name('register.agen');
Route::post('/register/agen', [RegisteredUserController::class, 'storeAgen']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

// Route::get('/', function () {return view('v_landingpage');});


// ADMIN
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/pengajuan', function () {return view('admin.v_pengajuan'); });
    Route::get('/detailpengajuan', [c_pengajuanadmin::class, 'detailpengajuan'])->name('v_detailpengajuanadmin');
});


//  REKAN TANI
Route::middleware(['auth', 'role:rekantani'])->prefix('rekantani')->group(function () {
    Route::get('/pengajuan', [C_pengajuanrekan::class, 'tampilpengajuan'])->name('rekantani.pengajuanmasuk');
    Route::get('katalog', [C_katalog::class, 'index'])->name('rekantani.katalog');
    Route::get('/katalog/cari', [C_katalog::class, 'cariKatalog'])->name('rekantani.cariKatalog');
    Route::get('/{id}/detailkatalog', [C_katalog::class, 'detailkatalog'])->name('rekantani.detailkatalog');
    Route::get('/tambahkatalog', [C_katalog::class, 'tampiltambahkatalog'])->name('rekantani.tambahkatalog');
    Route::post('/tambahkatalog', [C_katalog::class, 'tambahkatalog'])->name('rekantani.tambah.katalog');
    Route::get('/{id}/editkatalog', [C_katalog::class, 'editkatalog'])->name('rekantani.editkatalog');
    Route::put('/editkatalog/{id}', [c_katalog::class, 'updatekatalog'])->name('rekantani.katalog.update');
    Route::get('/detailpengajuan', [C_pengajuanrekan::class, 'lihatdetailpengajuan'])->name('rekantani.detailpengajuan');
    Route::delete('/{id}', [C_katalog::class, 'delete'])->name('rekantani.katalog.delete');
});


// AGEN
Route::middleware(['auth', 'role:agen'])->prefix('agen')->group(function () {
    Route::get('/pengajuan', [C_pengajuanAgen::class, 'tampilRekanTani'])->name('v_pengajuan');
    Route::get('/katalog/{rekantani_id}', [C_pengajuanAgen::class, 'lihatprofil'])->name('agen.katalog');
    Route::get('/detailkatalog/{bibit_id}', [C_pengajuanAgen::class, 'detailkatalog'])->name('v_detailkatalog');
    Route::get('/pengajuan/form/{bibit_id}', [C_pengajuanAgen::class, 'formpengajuan'])->name('v_formpengajuan');
    Route::post('/submit-pengajuan/{bibit_id}', [C_pengajuanAgen::class, 'submitPengajuan'])->name('agen.submitpengajuan');
    Route::get('/pengajuanterbaru', [C_pengajuanAgen::class, 'pengajuanterbaru'])->name('v_pengajuanterbaru');
    Route::get('/detailpengajuan', [C_pengajuanAgen::class, 'detailpengajuan'])->name('v_detailpengajuan');
});
