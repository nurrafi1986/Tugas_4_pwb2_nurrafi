<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        Kelas::create([
            'nama_kelas' => 'Laravel Dasar',
            'deskripsi' => 'Belajar dasar framework Laravel',
            'tanggal_mulai' => '2026-10-15',
            'tanggal_selesai' => '2026-11-15',
            'id_instruktur' => 1, // pastikan sesuai ID instruktur
        ]);

        Kelas::create([
            'nama_kelas' => 'React Native Pemula',
            'deskripsi' => 'Belajar membuat aplikasi mobile dengan React Native',
            'tanggal_mulai' => '2026-10-20',
            'tanggal_selesai' => '2026-11-20',
            'id_instruktur' => 2,
        ]);
    }
}
