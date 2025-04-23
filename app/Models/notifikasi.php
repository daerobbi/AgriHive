<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifikasi extends Model
{
    protected $table = 'notikasis';

    protected $fillable = [
        'judul',
        'isi_notif',
        'id_akun'];
}
