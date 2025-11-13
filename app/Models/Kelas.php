<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'tingkat',
        'paket_keahlian',
        'rombel',
        'id_wali',
    ];

    // Relasi ke tabel Guru
    public function waliKelas()
    {
        return $this->belongsTo(Guru::class, 'id_wali');
    }
}
