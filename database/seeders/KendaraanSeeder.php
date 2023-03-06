<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'no_pol'=>'AG 5756 KA',
                'merk'=>'Honda',
                'jenis'=>'Scoppy',
                'tahun_buat'=>2018,
                'warna'=>'Hitam',
            ],
            [
                'no_pol'=>'AG 5233 WL',
                'merk'=>'Honda',
                'jenis'=>'Supra',
                'tahun_buat'=>2012,
                'warna'=>'Hitam',
            ],
            [
                'no_pol'=>'S 3216 PT',
                'merk'=>'Honda',
                'jenis'=>'Win',
                'tahun_buat'=>2009,
                'warna'=>'Hitam ',
            ]


            ]);
     }
}
