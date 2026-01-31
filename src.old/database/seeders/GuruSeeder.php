<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::insert([
            [
                'nama' => 'Budi Santoso',
                'nim' => '12345678',
                'kelas_id' => 1,
                'jenjang_pendidikan_id' => 1,
                'status_kepegawaian' => 'Tetap',
                'gaji' => 7500000,
            ],
            [
                'nama' => 'Siti Aminah',
                'nim' => '87654321',
                'kelas_id' => 2,
                'jenjang_pendidikan_id' => 2,
                'status_kepegawaian' => 'Kontrak',
                'gaji' => 5500000,
            ],
        ]);
    }
}
