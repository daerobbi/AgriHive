<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bibit extends Model
{
    use HasFactory;
    protected $table = 'bibit';

    protected $fillable = [
        'nama_bibit',
        'deskripsi',
        'harga',
        'stok',
        'foto_bibit',
        'id_rekantani',
        'id_jenisbibit'
    ];

    public function rekanTani()
    {
        return $this->belongsTo(rekan_tani::class, 'id_rekantani');
    }

    public function jenisBibit()
    {
        return $this->belongsTo(JenisBibit::class, 'id_jenisbibit');
    }
    public function pengajuan()
    {
        return $this->hasOne(rekan_tani::class, 'id_bibit');
    }
}
