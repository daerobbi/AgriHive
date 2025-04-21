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
        $detailKatalog->harga = Number::currency($detailKatalog->harga,'IDR');
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
        return redirect('/rekantani/katalog')->with('success', 'Katalog berhasil ditambahkan!');
    }
    
    public function index(){
    $katalogs = bibit::groupBy('jenis_bibit')->where('id_user','=',Auth::user()->id)->get('jenis_bibit')->map(function($jenis){
        return bibit::where('jenis_bibit','=',$jenis->jenis_bibit)->get();
    });
        return view('rekantani.v_katalogrekan',compact('katalogs'));
    }

    public function delete($id){
        bibit::destroy($id);
        return redirect(route('rekantani.katalog'));
    }
    public function editkatalog(){
        return view('rekantani.v_editkatalogrekan');
    }
}



