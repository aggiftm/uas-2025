<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruSiswa extends Model
{
    protected $table = 'guru_siswas'; // pastikan nama tabel benar

    protected $fillable = [
        'guru_id',
        'siswa_id',
    ];

    // Relasi ke guru
    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class);
    }

    // Relasi ke siswa
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}
