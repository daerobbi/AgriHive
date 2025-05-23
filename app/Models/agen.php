<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agen extends Model
{
    use HasFactory;
    protected $table = 'agens';

    protected $fillable = [
        'nama',
        'alamat',
        'foto_profil',
        'no_hp',
        'bukti_usaha',
        'id_akun'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_akun');
    }

}
