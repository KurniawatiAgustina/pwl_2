<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga') ->insert([
            [
                    'nama'=>'Slamet Harianto',
                    'jk'=>'L',
                    'tgl-lahir'=>'23-05-1965',
                    'agama' => 'islam',
                    'pekerjaan' => 'Wiraswata',
                    'status' => 'Sudah menikah',
            ],
            [
                
                'nama'=>'Siti Mas Kurun ',
                'jk'=>'p',
                'tgl-lahir'=>'24-04-1970',
                'agama' => 'islam',
                'pekerjaan' => 'Ibu Rumah Tangga',
                'status' => 'Sudah menikah',
            ],
            [
                
                'nama'=>'Andrik Trianto',
                'jk'=>'L',
                'tgl-lahir'=>'12-04-1997',
                'agama' => 'islam',
                'pekerjaan' => 'Farmasi',
                'status' => 'Belum Menikah',
            ],
            [
                
                'Nama'=>'Kurniawati Agustina',
                'Jenis Kelamin'=>'p',
                'tgl-lahir'=>'16-08-2002',
                'Agama' => 'islam',
                'Pekerjaan' => 'Mahasiswa',
                'Status' => 'Belum Menikah',
            ]
                    
            ]);
        }
    }

