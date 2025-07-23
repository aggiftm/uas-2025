<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::insert([
            ['nama' => 'Andi Nugroho', 'kelas_id' => 1],
            ['nama' => 'Rina Ayu', 'kelas_id' => 1],
            ['nama' => 'Joko Susanto', 'kelas_id' => 2],
        ]);
    }
}
