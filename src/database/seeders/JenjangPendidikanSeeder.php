<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenjangPendidikan;

class JenjangPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenjangPendidikan::insert([
            ['nama_jenjang' => 'S1 Pendidikan Matematika'],
            ['nama_jenjang' => 'S1 Pendidikan Bahasa Inggris'],
            ['nama_jenjang' => 'S2 Pendidikan Fisika'],
        ]);
    }
}
