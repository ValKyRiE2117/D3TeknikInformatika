<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';

    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'sks',
        'jenis',
        'kelompok',
    ];

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_matkul');
    }
}
