<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelas_peserta', function (Blueprint $table) {
            $table->id('id_kelas_peserta');

            // Relasi ke tabel kelas
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')
                  ->references('id_kelas')
                  ->on('kelas')
                  ->onDelete('cascade');

            // Relasi ke tabel peserta
            $table->unsignedBigInteger('id_peserta');
            $table->foreign('id_peserta')
                  ->references('id_peserta')
                  ->on('peserta')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas_peserta');
    }
};
