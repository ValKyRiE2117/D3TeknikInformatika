<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get all records for TahunAjaran
        $tahunAjaranList = TahunAjaran::all();

        // Get the count of mahasiswa, matakuliah, and dosen
        $mahasiswaCount = Mahasiswa::count();  // Count of mahasiswa
        $matakuliahCount = Matakuliah::count();  // Count of matakuliah
        $dosenCount = Dosen::count();  // Count of dosen

        // Pass the data to the view
        return view('monitor/dashboard', compact('tahunAjaranList', 'mahasiswaCount', 'matakuliahCount', 'dosenCount'));
    }
}