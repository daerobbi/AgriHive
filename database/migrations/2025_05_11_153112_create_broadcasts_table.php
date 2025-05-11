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
        Schema::create('broadcasts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('judul_broadcast');
            $table->string('nama_bibit');
            $table->integer('jumlah_bibit');
            $table->string('lokasi');
            $table->string('kontak');
            $table->date('tanggal_kebutuhan');
            $table->string('deskripsi');
            $table->foreignId('id_agen')->constrained('agens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broadcasts');
    }
};
