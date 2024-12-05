<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'id_matkul',
        'id_mhs',
        'nilai_akhir',
    ];

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'id_matkul');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mhs');
    }
}
