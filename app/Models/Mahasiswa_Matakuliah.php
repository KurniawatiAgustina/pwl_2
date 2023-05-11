<?php

namespace App\Models;

use Database\Seeders\MataKuliahSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    /**
     * The attributes that are mass assignable.
     * *
     * @var array
     */
    
    protected $fillable = [
        'mahasiswas_id',
        'matkul_id',
        'nilai,'
    ];
        

    // public function kelas()
    // {
    //     return $this->belongsTo(KelasModel::class);
    // }

    // public function matkul_mahasiswa()
    // {
    //     return $this->hasMany(MatkulMahasiswaModel::class);
    // }
    public function mahasiswa(){
        return $this->belongsTo(MahasiswaModel::class);
    }

    public function matkul(){
        return $this->belongsTo(MatkulModel::class);
    }
}