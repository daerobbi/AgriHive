<?php

// app/Models/Komentar.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Komentar extends Model
{
    use HasUuids;

    protected $table = 'komentars'; // Nama tabel
    protected $keyType = 'string';  // Karena UUID adalah string
    public $incrementing = false;

    protected $fillable = [
        'isi_komentar',
        'id_user',
        'id_broadcast',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi ke Broadcast
    public function broadcast()
    {
        return $this->belongsTo(Broadcast::class, 'id_broadcast');
    }
}

