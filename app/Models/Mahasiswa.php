<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama_mhs',
        'slug_mhs',
        'status',
        'dosen_wali',
        'id_tahunajaran'
    ];

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_mhs');
    }

    public function dosenWali()
    {
        return $this->belongsTo(Dosen::class, 'dosen_wali'); // Assuming 'dosen_wali' is the foreign key
    }

    // Relationship to TahunAjaran
    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class, 'id_tahunajaran');
    }
}
