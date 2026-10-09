<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasPeserta extends Model
{
    use HasFactory;

    protected $table = 'kelas_peserta';
    protected $primaryKey = 'id_kelas_peserta';
    protected $fillable = ['id_kelas', 'id_peserta'];

    // Relasi ke kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    // Relasi ke peserta
    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
}
