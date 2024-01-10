<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'institusi',
        'whatsapp',
    ];

    // Relasi dengan model Tugas
    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }

    // Relasi dengan model Sertifikat
    public function sertifikats()
    {
        return $this->hasMany(Sertifikat::class);
    }

}