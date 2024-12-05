<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $all_dosen = Dosen::all();

        return view('profile', compact('all_dosen'));
    }
}
