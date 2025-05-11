<?php

// app/Models/Broadcast.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Broadcast extends Model
{
    use HasUuids;

    protected $keyType = 'string';  // UUID = string
    public $incrementing = false;

    protected $fillable = [
        'judul_broadcast',
        'nama_bibit',
        'jumlah_bibit',
        'lokasi',
        'kontak',
        'tanggal_kebutuhan',
        'deskripsi',
        'id_agen',
    ];

    // Relasi ke agen
    public function agen()
    {
        return $this->belongsTo(Agen::class, 'id_agen');
    }

    // Relasi ke komentar (jika ingin broadcast punya banyak komentar)
    public function komentars()
    {
        return $this->hasMany(Komentar::class, 'id_broadcast');
    }
}

