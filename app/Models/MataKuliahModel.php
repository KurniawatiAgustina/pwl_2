<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $fillable = [
        'mahasiswas_id',
        'matkul_id',
        'nilai',
    ];

    // public function mahasiswa()
    // {
    //     return $this->belongsTo(MahasiswaModel::class);
    // }
    
    
}


