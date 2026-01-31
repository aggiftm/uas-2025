<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruMataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guru_mata_pelajarans')->insert([
            ['guru_id' => 1, 'mata_pelajaran_id' => 1],
            ['guru_id' => 1, 'mata_pelajaran_id' => 3],
            ['guru_id' => 2, 'mata_pelajaran_id' => 2],
        ]);

    }
}
