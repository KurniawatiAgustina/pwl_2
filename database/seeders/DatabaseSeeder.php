<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KendaraanSeeder::class,
            HobiSeeder::class,
            KeluargaSeeder::class,
           MatakuliahSeeder::class
        ]);
    }
}
