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
        Schema::create('rekan_tanis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('foto_profil')->nullable();
            $table->string('no_hp');
            $table->string('bukti_usaha')->nullable();
            $table->foreignId('id_akun')->constrained('users');
            $table->foreignId('id_kota')->constrained('kotas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekan_tanis');
    }
};
