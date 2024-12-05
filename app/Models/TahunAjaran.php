<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;

    protected $table = 'tahun_ajaran';

    protected $fillable = [
        'tahun_mulai',
        'tahun_selesai',
        'semester',
        'deskripsi',
        'status',
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_tahunajaran');
    }
}
