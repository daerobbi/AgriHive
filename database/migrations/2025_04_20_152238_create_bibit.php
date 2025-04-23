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
        Schema::create('bibit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_bibit');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('foto_bibit');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_rekantani')->constrained('rekan_tanis');
            $table->foreignId('id_jenisbibit')->constrained('jenis_bibits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibit');
    }
};
