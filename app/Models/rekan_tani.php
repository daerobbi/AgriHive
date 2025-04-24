<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekan_tani extends Model
{
    protected $table = 'rekan_tanis';

    protected $fillable = [
        'nama',
        'alamat',
        'foto_profil',
        'no_hp',
        'bukti_usaha',
        'id_akun',
        'id_kota'];

    public function bibit()
    {
        return $this->hasMany(bibit::class, 'id_rekantani', 'id');
    }

    public function kota()
    {
        return $this->belongsTo(kota::class, 'id_kota');
    }

}
