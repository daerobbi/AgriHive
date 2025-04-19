<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_pengajuanrekan extends Controller
{
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
