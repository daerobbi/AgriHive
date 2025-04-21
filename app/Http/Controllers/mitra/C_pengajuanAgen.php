<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_pengajuanAgen extends Controller
{
    public function lihatprofil()
    {
        return view('Mitra.v_katalog');
    }

    public function detailkatalog()
    {
        return view('Mitra.v_detailkatalog');
    }

    public function formpengajuan(){
        return view('Mitra.v_formpengajuan');
    }

    public function pengajuanterbaru(){
        return view('Mitra.v_pengajuanterbaru');
    }

    public function detailpengajuan(){
        return view('Mitra.v_detailpengajuan');
    }
}
