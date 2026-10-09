<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Peserta;

class KelasPesertaSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil kelas pertama dan peserta pertama & kedua
        $kelas1 = Kelas::find(1);
        $peserta1 = Peserta::find(1);
        $peserta2 = Peserta::find(2);

        if ($kelas1 && $peserta1 && $peserta2) {
            // Kelas pertama diikuti oleh dua peserta
            $kelas1->peserta()->attach([$peserta1->id_peserta, $peserta2->id_peserta]);
        }

        // Ambil kelas kedua dan peserta kedua
        $kelas2 = Kelas::find(2);
        if ($kelas2 && $peserta2) {
            // Kelas kedua diikuti oleh satu peserta
            $kelas2->peserta()->attach($peserta2->id_peserta);
        }
    }
}
