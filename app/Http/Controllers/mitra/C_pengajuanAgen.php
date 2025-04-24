<?php

namespace App\Http\Controllers\mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rekan_tani;
use App\Models\JenisBibit;
use App\Models\kota;
use App\Models\bibit;

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

    public function formpengajuan()
    {
        return view('Mitra.v_formpengajuan');
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


