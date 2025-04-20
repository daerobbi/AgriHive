<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class c_pengajuanadmin extends Controller
{
    public function detailpengajuan()
    {
        return view('admin.v_detailpengajuan');
    }
}
