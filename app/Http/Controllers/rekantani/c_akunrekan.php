<?php

namespace App\Http\Controllers\rekantani;

use App\Http\Controllers\Controller;
use App\Models\rekan_tani;
use Illuminate\Support\Facades\Auth;
use App\Models\kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class c_akunrekan extends Controller
{
    public function profil()
    {
        $user = Auth::user(); // dari tabel akun
        $rekan = rekan_tani::with('kota')->where('id_akun', $user->id)->first();

        return view('rekantani.v_akunrekan', compact('user', 'rekan'));
    }

    public function edit()
    {
        $rekan = rekan_tani::with('user')->where('id_akun', Auth::id())->firstOrFail();
        $kotaList = kota::all();
        return view('rekantani.v_editakunrekan', compact('rekan', 'kotaList'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'id_kota' => 'required|exists:kotas,id',
            'foto_profil' => 'nullable|image',
        ]);

        $rekan = rekan_tani::where('id_akun', Auth::id())->firstOrFail();
        $akun = $rekan->user;

        // Update data user dan rekan
        $akun->email = $request->email;
        $akun->save();

        $rekan->nama = $request->nama;
        $rekan->alamat = $request->alamat;
        $rekan->no_hp = $request->no_hp;
        $rekan->id_kota = $request->id_kota;

        if ($request->hasFile('foto_profil')) {
            if ($rekan->foto_profil) {
                Storage::delete('public/' . $rekan->foto_profil);
            }
            $file = $request->file('foto_profil')->store('foto_profil', 'public');
            $rekan->foto_profil = $file;
        }

        $rekan->save();

        return redirect()->route('profil.rekantani')->with('success', 'Profil berhasil diperbarui!');
    }
}
