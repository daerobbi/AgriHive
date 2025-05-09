<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';

    protected $fillable = [
        'jumlah_permintaan',
        'tanggal_dibutuhkan',
        'tanggal_pengiriman',
        'lokasi_pengiriman',
        'keterangan',
        'narahubung',
        'status_pengajuan',
        'status_pembayaran',
        'status_pengiriman',
        'foto_invoice',
        'bukti_bayar',
        'id_bibit',
        'id_agens'];

    public function bibit()
    {
        return $this->belongsTo(Bibit::class, 'id_bibit')->withTrashed();
    }

    public function agen()
    {
        return $this->belongsTo(Agen::class, 'id_agens');
    }
}
