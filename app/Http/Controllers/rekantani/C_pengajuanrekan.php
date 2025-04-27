<?php

namespace App\Http\Controllers\rekantani;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class C_pengajuanrekan extends Controller
{
    public function tampilpengajuan()
    {
        // Ambil Rekan Tani yang sedang login
        $rekanTani = Auth::user()->rekantani;

        // Ambil semua pengajuan yang terkait bibit milik Rekan Tani tersebut
        $pengajuan = Pengajuan::whereHas('bibit', function($query) use ($rekanTani) {
            $query->where('id_rekantani', $rekanTani->id);
        })
        ->with(['bibit', 'agen']) // load relasi bibit dan agen
        ->orderBy('created_at', 'desc')
        ->get();

        return view('rekantani.v_pengajuan', compact('pengajuan'));
    }
    public function lihatdetailpengajuan()
    {
        return view('rekantani.v_detailpengajuan');
    }
    public function detailkatalog(){
        return view('rekantani.v_detailkatalogrekan');
    }
    public function tambahkatalog(){
        return view('rekantani.v_tambahkatalog');
    }
}
