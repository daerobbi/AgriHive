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
            $table->enum('jenis_bibit',['buah-buahan','tanaman hias','sayuran','tanaman herbal']);
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('foto_bibit');
            $table->foreignId('id_user')->constrained('users');
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
