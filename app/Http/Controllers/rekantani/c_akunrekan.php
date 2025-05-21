<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use App\Models\rekan_tani;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class c_akunrekan extends Controller
{
    public function profil()
    {
        $user = Auth::user(); // dari tabel akun
        $rekan = rekan_tani::with('kota')->where('id_akun', $user->id)->first();

        return view('rekantani.v_akunrekan', compact('user', 'rekan'));
    }
}
