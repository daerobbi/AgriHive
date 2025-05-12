<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Broadcast;
use App\Models\Komentar;
use Illuminate\Support\Str;
use Carbon\Carbon;

class c_broadcastagen extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $agen = $user->agen;

        if (!$agen) {
            abort(403, 'Anda bukan agen');
        }

        // Hapus broadcast yang tanggal kebutuhannya sudah lewat
        Broadcast::where('id_agen', $agen->id)
            ->where('tanggal_kebutuhan', '<', Carbon::today()->toDateString())
            ->delete();

        // Ambil broadcast terbaru milik agen
        $broadcasts = Broadcast::withCount('komentars')
                        ->where('id_agen', $agen->id)
                        ->get();

        return view('Mitra.v_broadcast', compact('broadcasts'));
    }

    public function create()
    {
        return view('Mitra.v_buatbroadcast');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_broadcast'    => 'required|string|max:255',
            'nama_bibit'         => 'required|string|max:255',
            'jumlah_bibit'       => 'required|integer|min:1',
            'lokasi'             => 'required|string',
            'kontak'             => 'required|string|max:255',
            'tanggal_kebutuhan'  => 'required|date',
            'deskripsi'          => 'required|string',
        ]);

        $agen = Auth::user()->agen;
        if (!$agen) {
            return redirect()->back()->withErrors('Hanya agen yang bisa membuat broadcast.');
        }

        Broadcast::create([
            'id'                 => Str::uuid(),
            'judul_broadcast'    => $request->judul_broadcast,
            'nama_bibit'         => $request->nama_bibit,
            'jumlah_bibit'       => $request->jumlah_bibit,
            'lokasi'             => $request->lokasi,
            'kontak'             => $request->kontak,
            'tanggal_kebutuhan'  => $request->tanggal_kebutuhan,
            'deskripsi'          => $request->deskripsi,
            'id_agen'            => $agen->id,
        ]);

        return redirect()->route('agen.broadcast')->with('success', 'Broadcast berhasil dikirim!');
    }

    public function show($id)
    {
        $broadcast = Broadcast::findOrFail($id);
        return view('Mitra.v_editbroadcast', compact('broadcast'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_broadcast' => 'required|string',
            'nama_bibit' => 'required|string',
            'jumlah_bibit' => 'required|integer|min:1',
            'lokasi' => 'required|string',
            'kontak' => 'required|string',
            'tanggal_kebutuhan' => 'required|date',
            'deskripsi' => 'required|string',
        ]);

        $broadcast = Broadcast::findOrFail($id);
        $broadcast->update($request->all());

        return redirect()->route('agen.broadcast', $broadcast->id)->with('success', 'Broadcast berhasil diperbarui!');
    }

    public function detail($id)
    {
        $broadcast = Broadcast::with('agen')->findOrFail($id);

        $komentars = Komentar::with(['user.agen', 'user.rekantani'])
                        ->where('id_broadcast', $broadcast->id)
                        ->orderBy('created_at', 'asc')
                        ->get();

        return view('Mitra.v_komentar', compact('broadcast', 'komentars'));
    }

    public function kirimKomentar(Request $request, $id)
    {
        $request->validate([
            'isi_komentar' => 'required|string|max:255',
        ]);

        Komentar::create([
            'id_user' => Auth::id(),
            'id_broadcast' => $id,
            'isi_komentar' => $request->isi_komentar,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim.');
    }

    public function hapusKomentar($id)
    {
        $komentar = Komentar::findOrFail($id);

        // if ($komentar->id_user !== Auth::id()) {
        //     abort(403, 'Tidak diizinkan menghapus komentar ini.');
        // }

        $komentar->delete();

        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}
