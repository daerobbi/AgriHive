<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;
use App\Models\Broadcast;

class c_berandarekantani extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Pengajuan terkait rekan tani user
        $pengajuanQuery = Pengajuan::whereHas('bibit.rekanTani', function($query) use ($user) {
            $query->where('id_akun', $user->id);
        });

        $totalPengajuan = $pengajuanQuery->count();

        $pengajuanPerluPersetujuan = (clone $pengajuanQuery)
            ->whereNull('status_pengajuan') // ganti sesuai status sebenarnya
            ->count();

        // Broadcast hitung total semua broadcast, karena broadcast tidak terkait pengajuan
        $broadcastCount = Broadcast::count();

        return view('rekantani.v_beranda', [
            'totalPengajuan' => $totalPengajuan,
            'pengajuanPerluPersetujuan' => $pengajuanPerluPersetujuan,
            'broadcastCount' => $broadcastCount,
            'user' => $user,
        ]);
    }
}
