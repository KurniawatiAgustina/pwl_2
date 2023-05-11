<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswa_MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
            DB::table('matkul')->insert([
                [
                    'mahasiswa_id' => '1',
                    'matkul_id' => '1',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '1',
                    'matkul_id' => '2',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '1',
                    'matkul_id' => '3',
                    'nilai' => 'B+'
                ],
                [
                    'mahasiswa_id' => '1',
                    'matkul_id' => '4',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '1',
                    'matkul_id' => '5',
                    'nilai' => 'B+'
                ],
            ]);
    }
}
