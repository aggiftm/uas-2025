<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenjangPendidikan extends Model
{
    protected $fillable = ['nama_jenjang'];

    public function gurus() {
        return $this->hasMany(Guru::class);
    }
}
