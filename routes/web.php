<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mitra\C_pengajuanAgen;
use App\Http\Controllers\rekantani\C_pengajuanrekan;
use App\Http\Controllers\rekantani\c_katalog;
use App\Http\Controllers\admin\c_pengajuanadmin;
use App\Http\Controllers\rekantani\c_manajemenjadwaldistribusi;
use App\Http\Controllers\mitra\c_broadcastagen;
use App\Http\Controllers\mitra\c_riwayatpengajuan;
use App\Http\Controllers\mitra\c_akunagen;
use App\Http\Controllers\rekantani\c_akunrekan;
use App\Http\Controllers\rekantani\c_broadcastrekan;
use App\Http\Controllers\admin\c_rekantani;
use App\Http\Controllers\admin\c_agen;
use App\Http\Controllers\admin\c_berandaadmin;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\c_register;
use App\Http\Controllers\mitra\c_berandaagen;
use App\Http\Controllers\rekantani\c_berandarekantani;

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
Route::get('/', function () {return view('V_landingpage');});
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/register', [c_register::class, 'showForm'])->name('register');
Route::post('/register', [c_register::class, 'store'])->name('register.store');


// Pendaftaran Rekantani
// Route::get('/register/rekantani', [RegisteredUserController::class, 'createRekantani'])->name('register.rekantani');
// Route::post('/register/rekantani', [RegisteredUserController::class, 'storeRekantani']);

// // Pendaftaran Agen
// Route::get('/register/agen', [RegisteredUserController::class, 'createAgen'])->name('register.agen');
// Route::post('/register/agen', [RegisteredUserController::class, 'storeAgen']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// require __DIR__.'/auth.php';

// Route::get('/', function () {return view('v_landingpage');});


// ADMIN
Route::middleware(['auth','role:admin'])->prefix('admin')->group(function () {
    Route::get('/beranda', [c_berandaadmin::class, 'index'])->name('admin.beranda');
    Route::get('/pengajuan', [c_pengajuanadmin::class, 'index'])->name('admin.pengajuan');
    Route::get('/pengajuan/{id}', [c_pengajuanadmin::class, 'detailpengajuan'])->name('v_detailpengajuanadmin');
    Route::get('/rekan-tani', [c_rekantani::class, 'rekantani'])->name('admin.rekantani');
    Route::get('/agen', [c_agen::class, 'agen'])->name('admin.agen');

});





//  REKAN TANI
Route::middleware(['auth', 'role:rekantani'])->prefix('rekantani')->group(function () {
    Route::get('/beranda', [c_berandarekantani::class, 'index'])->name('rekantani.beranda');
    Route::get('/pengajuan', [C_pengajuanrekan::class, 'tampilpengajuan'])->name('rekantani.pengajuanmasuk');
    Route::get('/katalog', [C_katalog::class, 'index'])->name('rekantani.katalog');
    Route::get('/katalog/cari', [C_katalog::class, 'cariKatalog'])->name('rekantani.cariKatalog');
    Route::get('/{id}/detailkatalog', [C_katalog::class, 'detailkatalog'])->name('rekantani.detailkatalog');
    Route::get('/tambahkatalog', [C_katalog::class, 'tampiltambahkatalog'])->name('rekantani.tambahkatalog');
    Route::post('/tambahkatalog', [C_katalog::class, 'tambahkatalog'])->name('rekantani.tambah.katalog');
    Route::get('/{id}/editkatalog', [C_katalog::class, 'editkatalog'])->name('rekantani.editkatalog');
    Route::put('/editkatalog/{id}', [c_katalog::class, 'updatekatalog'])->name('rekantani.katalog.update');
    Route::get('/detailpengajuan/{id}', [C_pengajuanrekan::class, 'lihatdetailpengajuan'])->name('rekantani.detailpengajuan');
    Route::post('/pengajuan/{id}/terima', [C_pengajuanrekan::class, 'terimaPengajuan'])->name('rekantani.pengajuan.terima');
    Route::post('/pengajuan/{id}/tolak', [C_pengajuanrekan::class, 'tolakPengajuan'])->name('rekantani.pengajuan.tolak');
    Route::get('/pengajuan/{id}', [C_pengajuanrekan::class, 'pembayaran'])->name('rekantani.pengajuan.pembayaran');
    Route::post('/pengajuan/{id}/verifikasi', [C_pengajuanrekan::class, 'verifikasi'])->name('rekantani.pembayaran.verifikasi');
    Route::post('/pengajuan/{id}/tolakpembayaran', [C_pengajuanrekan::class, 'tolak'])->name('rekantani.pembayaran.tolak');
    Route::get('/jadwalDistribusi', [c_manajemenjadwaldistribusi::class, 'terverifikasi'])->name('rekantani.distribusi');
    Route::get('/jadwalDistribusi/{id}', [c_manajemenjadwaldistribusi::class, 'showdetailpengiriman'])->name('rekantani.detailpengiriman');
    Route::post('/JadwalDistribusi/{id}/kirim', [c_manajemenjadwaldistribusi::class, 'updateStatusPengiriman'])->name('rekantani.dikirim');
    Route::get('/riwayat-pengajuan', [c_manajemenjadwaldistribusi::class, 'riwayatpengajuan'])->name('rekantani.riwayat');
    Route::get('/detail/riwayat/{id}', [c_manajemenjadwaldistribusi::class, 'detailriwayat'])->name('rekantani.detailriwayat');
    Route::get('/broadcast', [c_broadcastrekan::class, 'index'])->name('rekantani.broadcast');
    Route::get('/broadcast/{id}', [c_broadcastrekan::class, 'show'])->name('rekantani.detailbroadcast');
    Route::post('/broadcast/{id}/komentar', [c_broadcastrekan::class, 'kirimKomentar'])->name('rekantani.broadcast.komentar');
    Route::get('/profil', [c_akunrekan::class, 'profil'])->name('profil.rekantani');
    Route::get('/edit/profil', [c_akunrekan::class, 'edit'])->name('rekantani.editprofil');
    Route::post('/profil/update', [c_akunrekan::class, 'update'])->name('rekan.profil.update');
    Route::delete('/komentar/{id}', [c_broadcastrekan::class, 'hapusKomentar'])->name('rekantani.komentar.hapus');
    Route::delete('/katalog/{id}', [C_katalog::class, 'delete'])->name('rekantani.katalog.delete');
});




// AGEN
Route::middleware(['auth', 'role:agen'])->prefix('agen')->group(function () {
    Route::get('/beranda', [c_berandaagen::class, 'index'])->name('agen.beranda');
    Route::get('/pengajuan', [C_pengajuanAgen::class, 'tampilRekanTani'])->name('v_pengajuan');
    Route::get('/katalog/{rekantani_id}', [C_pengajuanAgen::class, 'lihatprofil'])->name('agen.katalog');
    Route::get('/detailkatalog/{bibit_id}', [C_pengajuanAgen::class, 'detailkatalog'])->name('v_detailkatalog');
    Route::get('/pengajuan/form/{bibit_id}', [C_pengajuanAgen::class, 'formpengajuan'])->name('v_formpengajuan');
    Route::post('/submit-pengajuan/{bibit_id}', [C_pengajuanAgen::class, 'submitPengajuan'])->name('agen.submitpengajuan');
    Route::get('/pengajuanterbaru', [C_pengajuanAgen::class, 'pengajuanterbaru'])->name('v_pengajuanterbaru');
    Route::get('/pengajuan/detail/{pengajuan_id}', [C_pengajuanAgen::class, 'detailpengajuan'])->name('agen.detailpengajuan');
    Route::get('/pembayaran/{pengajuan_id}',[C_pengajuanAgen::class, 'detailpembayaran'])->name('agen.formpembayaran');
    Route::post('/pengajuan/upload-bukti/{pengajuan_id}', [C_pengajuanAgen::class, 'uploadBuktiTransfer'])->name('agen.uploadbukti');
    Route::put('/agen/pengajuan/update/{pengajuan_id}', [C_pengajuanAgen::class, 'updatePengajuan'])->name('agen.updatepengajuan');
    Route::get('/riwayat-pengajuan', [c_riwayatpengajuan::class, 'riwayatPengajuan'])->name('agen.riwayat');
    Route::put('/pengajuan/terima/{id}', [c_riwayatpengajuan::class, 'terima'])->name('agen.selesai');
    Route::get('/detail/riwayat/{id}', [c_riwayatpengajuan::class, 'detailriwayat'])->name('agen.detailriwayat');
    Route::get('/broadcast', [c_broadcastagen::class, 'index'])->name('agen.broadcast');
    Route::get('/broadcast/create', [c_broadcastagen::class, 'create'])->name('agen.buatbroadcast');
    Route::post('/broadcast/buat', [c_broadcastagen::class, 'store'])->name('agen.broadcast.store');
    Route::get('/broadcast/{id}', [c_broadcastagen::class, 'show'])->name('agen.editbroadcast');
    Route::put('/broadcast/{id}/update', [c_broadcastagen::class, 'update'])->name('agen.broadcast.update');
    Route::get('/broadcast/{id}/detail', [c_broadcastagen::class, 'detail'])->name('agen.broadcast.detail');
    Route::post('/broadcast/{id}/komentar', [c_broadcastagen::class, 'kirimKomentar'])->name('agen.broadcast.komentar');
    Route::get('/profil', [c_akunagen::class, 'tampilProfil'])->name('agen.profil');
    Route::get('/agen/profil', [c_akunagen::class, 'edit'])->name('agen.editprofil');
    Route::post('/profil/update', [c_akunagen::class, 'update'])->name('agen.profil.update');
    Route::delete('/komentar/{id}', [c_broadcastagen::class, 'hapusKomentar'])->name('agen.komentar.hapus');
    Route::delete('/agen/pengajuan/hapus/{pengajuan_id}', [C_pengajuanAgen::class, 'hapusPengajuan'])->name('agen.hapuspengajuan');
});
