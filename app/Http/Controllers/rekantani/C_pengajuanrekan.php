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
            'file_invoice' => 'required',
        ]);

        $pengajuan = Pengajuan::findOrFail($id);

        if ($request->hasFile('file_invoice')) {
            $file = $request->file('file_invoice');
            $fileName = 'invoice_' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('invoices', $fileName, 'public'); // HANYA PATH, TANPA URL

            $pengajuan->file_invoice = $filePath; // Simpan hanya "invoices/xxx.jpg"
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
    public function detailkatalog(){
        return view('rekantani.v_detailkatalogrekan');
    }
    public function tambahkatalog(){
        return view('rekantani.v_tambahkatalog');
    }
}
