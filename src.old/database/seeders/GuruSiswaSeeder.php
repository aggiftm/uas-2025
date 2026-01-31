<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guru_siswas')->insert([
            ['guru_id' => 1, 'siswa_id' => 1],
            ['guru_id' => 1, 'siswa_id' => 2],
            ['guru_id' => 2, 'siswa_id' => 3],
        ]);
    }
}
