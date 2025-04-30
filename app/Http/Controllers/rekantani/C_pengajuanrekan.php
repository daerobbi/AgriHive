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


    public function lihatdetailpengajuan($id)
    {
        $pengajuan = Pengajuan::with(['bibit.rekanTani', 'bibit.jenisBibit'])->findOrFail($id);
        return view('rekantani.v_detailpengajuan', compact('pengajuan'));
    }


    public function terimaPengajuan(Request $request, $id)
    {
        $request->validate([
            'foto_invoice' => 'required',
        ]);
        $pengajuan = Pengajuan::findOrFail($id);

        if ($request->hasFile('foto_invoice')) {
            $file = $request->file('foto_invoice');
            $fileName = 'invoice_' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('invoices', $fileName, 'public'); // HANYA PATH, TANPA URL

            $pengajuan->foto_invoice = $filePath; // Simpan hanya "invoices/xxx.jpg"
        }

        $pengajuan->status_pengajuan = 1;
        $pengajuan->save();

        return redirect()->back()->with('success', 'Pengajuan berhasil diterima dan invoice berhasil diupload.');
    }


    public function tolakPengajuan($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status_pengajuan = 0;
        $pengajuan->save();

        return redirect()->back()->with('success', 'Pengajuan berhasil ditolak.');
    }

    public function pembayaran($id)
    {
        $pengajuan = Pengajuan::with('agen')->findOrFail($id);
        return view('rekantani.v_verifikasipembayaran', compact('pengajuan'));
    }

    public function verifikasi($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        // Update status pembayaran 
        $pengajuan->status_pembayaran = 1;

        // Kurangi stok bibit
        $bibit = $pengajuan->bibit; // asumsi relasi 'bibit' di model Pengajuan
        if ($bibit->stok >= $pengajuan->jumlah_permintaan) {
            $bibit->stok -= $pengajuan->jumlah_permintaan;
            $bibit->save();
        } else {
            return redirect()->back()->with('error', 'Stok bibit tidak mencukupi.');
        }

        $pengajuan->save();

        return redirect()->route('rekantani.pengajuanmasuk', $id)->with('success', 'Pembayaran telah diverifikasi dan stok bibit dikurangi.');
    }

    public function tolak($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status_pembayaran = 0;
        $pengajuan->status_pengajuan= 0;
        $pengajuan->save();

        return redirect()->route('rekantani.pengajuanmasuk', $id)->with('error', 'Pembayaran telah ditolak.');
    }
}
