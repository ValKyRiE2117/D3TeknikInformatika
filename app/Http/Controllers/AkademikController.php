<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('akademik', compact('matakuliah'));
    }
}