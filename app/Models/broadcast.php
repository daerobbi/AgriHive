<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class broadcast extends Model
{
    protected $table = 'broadcasts';

    protected $fillable = [
        'isi_broadcast',
        'id_akun'];
}
