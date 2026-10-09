<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    use HasFactory;

    protected $table = 'instruktur';
    protected $primaryKey = 'id_instruktur';
    protected $fillable = ['nama', 'email', 'no_hp', 'alamat', 'bidang_keahlian', 'tanggal_masuk'];

    // Relasi one-to-many ke kelas
    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_instruktur');
    }
}
