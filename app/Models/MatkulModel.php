<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MatkulModel extends Model
{
    use HasFactory;
    protected $table = 'matkul';

    public function mahasiswaMatakuliah(){
        return $this->HasMany(MahasiswaMatakuliah::class);
    }
}