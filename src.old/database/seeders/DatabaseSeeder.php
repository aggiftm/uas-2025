<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\JenjangPendidikan;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Models\Siswa;
use App\Models\GuruMataPelajaran;
use App\Models\GuruSiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            KelasSeeder::class,
            JenjangPendidikanSeeder::class,
            GuruSeeder::class,
            MataPelajaranSeeder::class,
            SiswaSeeder::class,
            GuruMataPelajaranSeeder::class,
            GuruSiswaSeeder::class,
        ]);
    }
}
