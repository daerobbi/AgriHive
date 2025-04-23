<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table = 'komentars';

    protected $fillable = [
        'isi_komentar',
        'id_broadcast'];
}
