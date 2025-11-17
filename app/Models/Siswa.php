<?php
// app/Models/Siswa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    // Opsional: Jika nama tabel Anda BUKAN 'siswas' (plural),
    // tapi 'siswa' (singular), tambahkan baris ini:
    protected $table = 'siswa'; 

    // Kolom-kolom yang ada di tabel Anda: id, nis, nama, kelas
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
    ];
}