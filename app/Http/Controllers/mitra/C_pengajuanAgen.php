<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rekan_tani;
use App\Models\JenisBibit;
use App\Models\kota;
use App\Models\bibit;
use App\Models\pengajuan;

class C_pengajuanAgen extends Controller
{
    public function lihatprofil($rekantani_id)
    {
        $rekan = rekan_tani::with('kota')->where('id', $rekantani_id)->firstOrFail();

        $bibits = $rekan->bibit()->with('JenisBibit')->get();

        return view('Mitra.v_katalog', compact('rekan', 'bibits'));
    }



    public function detailkatalog($bibit_id)
    {
        $bibit = bibit::with(['JenisBibit', 'rekanTani.kota'])->findOrFail($bibit_id);

        return view('Mitra.v_detailkatalog', compact('bibit'));
    }

    public function formpengajuan($bibitId)
    {
        $bibit = bibit::findOrFail($bibitId);
        return view('Mitra.v_formpengajuan', compact('bibit'));
    }

    public function submitPengajuan(Request $request, $bibit_id)
    {

        $request->validate([
            'jumlah_permintaan' => 'required|integer|min:1',
            'tanggal_dibutuhkan' => 'required|date',
            'tanggal_pengiriman' => 'nullable|date',
            'lokasi_pengiriman' => 'required|string',
            'keterangan' => 'nullable|string',
            'narahubung' => 'required|string',
        ]);

        $bibit = Bibit::findOrFail($bibit_id);
        $agen = auth()->user()->agen;

        // // Handle file uploads if any
        // $foto_invoice = null;
        // if ($request->hasFile('foto_invoice')) {
        //     $foto_invoice = $request->file('foto_invoice')->store('invoices', 'public');
        // }

        // $bukti_bayar = null;
        // if ($request->hasFile('bukti_bayar')) {
        //     $bukti_bayar = $request->file('bukti_bayar')->store('payment_proofs', 'public');
        // }

        Pengajuan::create([
            'jumlah_permintaan' => $request->jumlah_permintaan,
            'tanggal_dibutuhkan' => $request->tanggal_dibutuhkan,
            'tanggal_pengiriman' => $request->tanggal_pengiriman,
            'lokasi_pengiriman' => $request->lokasi_pengiriman,
            'keterangan' => $request->keterangan,
            'narahubung' => $request->narahubung,
            'status_pengajuan' => null,
            'status_pembayaran' => 0,
            'status_pengiriman' => 'diproses',
            'foto_invoice' => null,
            'bukti_bayar' => null,
            'id_bibit' => $bibit->id,
            'id_agens' => $agen->id,
        ]);

        return redirect()->route('agen.katalog', ['rekantani_id' => $bibit->rekanTani->id])->with('success', 'Pengajuan berhasil dikirim!');
        }


    public function pengajuanterbaru()
    {
        return view('Mitra.v_pengajuanterbaru');
    }

    public function detailpengajuan()
    {
        return view('Mitra.v_detailpengajuan');
    }

    public function tampilRekanTani(Request $request)
    {
        $lokasi = $request->input('lokasi');
        $jenis = $request->input('jenis');

        $query = rekan_tani::with(['bibit.JenisBibit', 'kota']);

        if ($lokasi) {
            $query->whereHas('kota', function ($q) use ($lokasi) {
                $q->where('nama_kota', $lokasi);
            });
        }

        if ($jenis) {
            $query->whereHas('bibit.JenisBibit', function ($q) use ($jenis) {
                $q->where('jenis_bibit', 'like', '%' . $jenis . '%');
            });
        }

        $rekanTani = $query->get();
        $daftarJenis = JenisBibit::all();
        $daftarKota = Kota::all();

        return view('Mitra.v_pengajuan', compact('rekanTani', 'daftarJenis', 'daftarKota'));
    }
}


