<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    protected $table = 'sertifikat';

    protected $fillable = [
        'user_id',
        'judul',
        'link_blog',
        'link_gbook',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    
    // Relasi dengan model Trainer
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function tugas()
    {
        return $this->belongsTo(Tugas::class);
    }
}
