<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    protected $primaryKey = 'id_peserta';
    protected $fillable = ['nama', 'email', 'no_hp', 'alamat', 'tanggal_daftar'];

    // Relasi many-to-many ke kelas
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_peserta', 'id_peserta', 'id_kelas');
    }
}
