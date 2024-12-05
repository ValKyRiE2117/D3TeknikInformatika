<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        // Get all matakuliah records
        $matakuliah = Matakuliah::all();

        return view('monitor/input-nilai', compact('matakuliah'));
    }
}