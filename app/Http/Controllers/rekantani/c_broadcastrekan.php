<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Broadcast;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class c_broadcastrekan extends Controller
{
    public function index()
    {
        Broadcast::where('tanggal_kebutuhan', '<', Carbon::today()->toDateString())
        ->delete();
        $broadcasts = Broadcast::withCount('komentars')->latest()
        ->get();

        return view('rekantani.v_broadcast', compact('broadcasts'));
    }

    public function show($id)
    {
        $broadcast = Broadcast::with('agen')->findOrFail($id);

        $komentars = Komentar::where('id_broadcast', $id)->with('user.agen', 'user.rekantani')->latest()->get();

        return view('rekantani.v_detailbroadcast', compact('broadcast', 'komentars'));
    }

    public function kirimKomentar(Request $request, $broadcast_id)
    {
        $request->validate([
            'isi_komentar' => 'required|string|max:1000'
        ]);

        Komentar::create([
            'id_broadcast' => $broadcast_id,
            'id_user' => Auth::id(),
            'isi_komentar' => $request->isi_komentar
        ]);

        return back()->with('success', 'Komentar berhasil dikirim.');
    }

    public function hapusKomentar($id)
    {
        $komentar = Komentar::findOrFail($id);

        if (Auth::id() !== $komentar->id_user) {
            return redirect()->back()->with('error', 'Anda tidak berhak menghapus komentar ini.');
        }

        $komentar->delete();

        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}
