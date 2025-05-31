<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('isi_komentar');
            $table->uuid('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('id_broadcast');
            $table->foreign('id_broadcast')->references('id')->on('broadcasts')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentars');
    }
};
