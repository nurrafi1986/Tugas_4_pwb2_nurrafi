<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['nama_kelas', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai', 'id_instruktur'];

    // Relasi ke instruktur
    public function instruktur()
    {
        return $this->belongsTo(Instruktur::class, 'id_instruktur');
    }

    // Relasi many-to-many ke peserta
    public function peserta()
    {
        return $this->belongsToMany(Peserta::class, 'kelas_peserta', 'id_kelas', 'id_peserta');
    }
}
