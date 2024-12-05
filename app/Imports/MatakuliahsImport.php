<?php

namespace App\Imports;

use App\Models\Matakuliah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MatakuliahsImport implements ToModel, WithHeadingRow
{
    /**
     * Define how the data should be imported to the model.
     */
    public function model(array $row)
    {
        return new Matakuliah([
            'nama_matkul' => $row['nama_matkul'], // Replace with your actual column names
            'kode_matkul' => $row['kode_matkul'],
            'sks' => $row['sks'],
            'jenis' => $row['jenis'],
            'kelompok' => $row['kelompok'],
        ]);
    }
}