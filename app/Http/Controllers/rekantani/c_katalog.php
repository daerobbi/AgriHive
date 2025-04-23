<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use App\Models\bibit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;
use Illuminate\Validation;
use Symfony\Component\Console\Input\Input;

class c_katalog extends Controller
{
    public function detailkatalog($id){
        $detailKatalog = bibit::whereId($id)->first();
        $detailKatalog->harga = str_replace('IDR','Rp',Number::currency($detailKatalog->harga,'IDR'));
        return view('rekantani.v_detailkatalogrekan',compact('detailKatalog'));
    }
    public function tampiltambahkatalog(){
        return view('rekantani.v_tambahkatalog');}

    public function tambahkatalog(Request $request)
    {
        $request->validate([
            'jenis_bibit' => 'required',
            'nama_bibit' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'required|string',
            'foto_bibit' => 'required',
        ]);
        // Simpan gambar
        $gambarPath = $request->file('foto_bibit')->store('katalog', 'public');
        // Simpan ke database
        bibit::create([
            'jenis_bibit' => $request->jenis_bibit,
            'nama_bibit' => $request->nama_bibit,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto_bibit' => $gambarPath,
            'id_user'=>Auth::user()->id]);
        return redirect('/rekantani/katalog');
    }

    public function index(){
    $katalogs = bibit::groupBy('jenis_bibit')->where('id_user','=',Auth::user()->id)->get('jenis_bibit')->map(function($jenis){
        return bibit::where('jenis_bibit','=',$jenis->jenis_bibit)->get()->map(function($data){
            $data->harga = str_replace('IDR','Rp',Number::currency($data->harga,'IDR'));
            return $data;
        });
    });
        return view('rekantani.v_katalogrekan',compact('katalogs'));
    }

    public function delete($id){
        bibit::destroy($id);
        return redirect(route('rekantani.katalog'));
    }
    public function editkatalog($id)
    {
        $bibit = bibit::findOrFail($id);
        return view('rekantani.v_editkatalogrekan', compact('bibit'));
    }
    public function updatekatalog(Request $request, $id)
    {

        $request->validate([
            'jenis_bibit' => 'required',
            'nama_bibit' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'required|string',
        ]);

        $bibit = bibit::findOrFail($id);
        $bibit->jenis_bibit = $request->jenis_bibit;
        $bibit->nama_bibit = $request->nama_bibit;
        $bibit->stok = $request->stok;
        $bibit->harga = $request->harga;
        $bibit->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto_bibit')) {
            if ($bibit->foto_bibit && Storage::disk('public')->exists($bibit->foto_bibit)) {
                Storage::disk('public')->delete($bibit->foto_bibit);
            }
            $gambarPath = $request->file('foto_bibit')->store('katalog', 'public');
            $bibit->foto_bibit = $gambarPath;
        }

        $bibit->save();

        return redirect('/rekantani/katalog')->with('success', 'Katalog berhasil diperbarui!');
    }

    public function cariKatalog(Request $request)
    {
    $query = $request->input('query');

    $results = bibit::where('id_user', Auth::user()->id)
                ->where(function ($q) use ($query) {
                    $q->where('nama_bibit', 'like', '%' . $query . '%')
                    ->orWhere('jenis_bibit', 'like', '%' . $query . '%');
                })
                ->get();

    // Kelompokkan hasil pencarian berdasarkan jenis_bibit
    $katalogs = $results->groupBy('jenis_bibit')->map(function($group) {
        return $group->map(function($item){
            $item->harga = str_replace('IDR','Rp', Number::currency($item->harga,'IDR'));
            return $item;
        });
    });

    return view('rekantani.v_katalogrekan', compact('katalogs'));
}

}



