<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peserta;

class PesertaSeeder extends Seeder
{
    public function run(): void
    {
        Peserta::create([
            'nama' => 'Rafi',
            'email' => 'rafi@example.com',
            'no_hp' => '081234567890',
            'alamat' => 'Balongmacekan',
        ]);

        Peserta::create([
            'nama' => 'Dina',
            'email' => 'dina@example.com',
            'no_hp' => '082345678901',
            'alamat' => 'Surabaya',
        ]);
    }
}
