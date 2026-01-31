<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama_kelas'];

    public function guru() {
        return $this->hasMany(Guru::class);
    }

    public function siswa() {
        return $this->hasMany(Siswa::class);
    }
}
