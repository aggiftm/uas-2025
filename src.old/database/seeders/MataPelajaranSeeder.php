<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataPelajaran;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataPelajaran::insert([
            ['nama' => 'Matematika'],
            ['nama' => 'Bahasa Inggris'],
            ['nama' => 'Fisika'],
        ]);
    }
}
