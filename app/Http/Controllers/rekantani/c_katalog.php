<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use App\Models\bibit;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class c_katalog extends Controller
{
    public function detailkatalog($id){
        $detailKatalog = bibit::whereId($id)->first();
        $detailKatalog->harga = Number::currency($detailKatalog->harga,'IDR');
        return view('rekantani.v_detailkatalogrekan',compact('detailKatalog'));
    }
    public function tambahkatalog(){
        return view('rekantani.v_tambahkatalog');
    }

    public function index(){
    $katalogs = bibit::groupBy('jenis_bibit')->get('jenis_bibit')->map(function($jenis){
        return bibit::where('jenis_bibit','=',$jenis->jenis_bibit)->get();
    });
        return view('rekantani\v_katalogrekan',compact('katalogs'));
    }

    public function delete($id){
        dd($id);
        bibit::destroy($id);
        return redirect(route('rekantani.katalog'));
    }
}

