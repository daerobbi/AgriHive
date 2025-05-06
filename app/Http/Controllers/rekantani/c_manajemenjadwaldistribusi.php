<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class c_manajemenjadwaldistribusi extends Controller
{
    public function terverifikasi(Request $request)
    {
        $rekanTani = Auth::user()->rekantani;

        $query = Pengajuan::with(['bibit', 'agen'])
            ->where('status_pembayaran', 1)
            ->whereHas('bibit', function ($q) use ($rekanTani) {
                $q->where('id_rekantani', $rekanTani->id);
            });

        // Pencarian berdasarkan nama agen
        if ($request->has('search') && !empty($request->search)) {
            $query->whereHas('agen', function($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%');
            });
        }

        // Filter berdasarkan status distribusi bibit
        if ($request->has('status_pengiriman') && !empty($request->status_pengiriman)) {
            $query->where('status_pengiriman', $request->status_pengiriman);
        }

        $pengajuan = $query->get();

        return view('rekantani.v_manajemenjadwaldistribusi', compact('pengajuan'));
    }

    public function showdetailpengiriman($id)
    {
        $pengajuan = Pengajuan::with(['bibit.jenisBibit', 'bibit.rekanTani'])->findOrFail($id);
        $tanggalDibutuhkan = Carbon::parse($pengajuan->tanggal_dibutuhkan);
        $tanggalPengiriman = Carbon::parse($pengajuan->tanggal_pengiriman);
        $akunRekan = $pengajuan->bibit->rekanTani ?? null;

        return view('rekantani.v_detailpengiriman', compact('pengajuan', 'akunRekan','tanggalDibutuhkan', 'tanggalPengiriman'));
    }

    public function updateStatusPengiriman($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status_pengiriman = 'dikirim';
        $pengajuan->tanggal_pengiriman = Carbon::now();
        $pengajuan->save();

        return redirect()->route('rekantani.distribusi')->with('success', 'Status pengiriman berhasil diubah!');
    }
}
