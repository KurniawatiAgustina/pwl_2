<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswamodel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'nama',
        'foto',
        'jk' ,
        'tempat_lahir' ,
        'tanggal_lahir' ,
        'alamat',
        'hp',
        'kelas_id',
       
    ];

  
    public function kelas (){
        return $this->belongsTo(KelasModel::class,'kelas_id','id');

    }
    
    public function mahasiswa_Matakuliah(){
        return $this->HasMany(Mahasiswa_Matakuliah::class,'matkul_id','id');
    }
}
