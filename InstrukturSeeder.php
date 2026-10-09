<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instruktur;

class InstrukturSeeder extends Seeder
{
    public function run(): void
    {
        Instruktur::create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'no_hp' => '081111111111',
            'alamat' => 'Malang',
            'bidang_keahlian' => 'Laravel',
        ]);

        Instruktur::create([
            'nama' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'no_hp' => '082222222222',
            'alamat' => 'Gresik',
            'bidang_keahlian' => 'React Native',
        ]);
    }
}
