<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('jumlah_permintaan');
            $table->date('tanggal_dibutuhkan');
            $table->date('tanggal_pengiriman');
            $table->text('lokasi_pengiriman');
            $table->text('keterangan');
            $table->string('narahubung');
            $table->boolean('status_pengajuan');
            $table->boolean('status_pembayaran');
            $table->enum('status_pengiriman',['diproses','dikirim','selesai']);
            $table->binary('foto_invoice');
            $table->binary('bukti_bayar');
            $table->foreignId('id_bibit')->constrained('bibit');
            $table->foreignId('id_user')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};
