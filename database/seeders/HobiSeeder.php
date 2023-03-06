<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('hobi') ->insert([
        [
                'nama'=>'Kurniawati Agustina',
                'Hobi'=>'Bulutangkis',
                'Alasan'=>'Karena suka dan biar badan menjadi lebih sehat ',
        ],
        [
            'nama'=>'Muhammad Andrik',
            'Hobi'=>'Mengaji',
            'Alasan'=>'Agar Bisa Menjadi pribadi lebih baik  ',  
        ],
        [
            'nama'=>'Giselle',
            'Hobi'=>'Mendengarkan lagu',
            'Alasan'=>'agar bisa menjadi lebih tenang  dan juga bisa membuat mood menjadi lebih baik ',
        ]
                
        ]);
    }
}
