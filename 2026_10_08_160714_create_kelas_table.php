<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->string('nama_kelas', 100);
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();

            // Relasi ke instruktur
            $table->unsignedBigInteger('id_instruktur');
            $table->foreign('id_instruktur')
                  ->references('id_instruktur')
                  ->on('instruktur')
                  ->onDelete('cascade');

            // Relasi ke peserta (opsional, bisa banyak)
            $table->unsignedBigInteger('id_peserta')->nullable();
            $table->foreign('id_peserta')
                  ->references('id_peserta')
                  ->on('peserta')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
