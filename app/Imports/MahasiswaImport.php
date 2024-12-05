<?php

namespace App\Imports;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\TahunAjaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Find the related dosen by nama_dosen
        $dosen = Dosen::where('nama_dosen', $row['nama_dosen'])->first();

        // Find the related tahun ajaran by deskripsi
        $tahunAjaran = TahunAjaran::where('deskripsi', $row['id_tahunajaran'])->first();

        // Create or update the Mahasiswa record
        return new Mahasiswa([
            'nim' => $row['nim'],
            'nama_mhs' => $row['nama_mhs'],
            'id_tahunajaran' => $tahunAjaran ? $tahunAjaran->id : null,
            'dosen_wali' => $dosen ? $dosen->id : null, // Map nama_dosen to ID
        ]);
    }
}
