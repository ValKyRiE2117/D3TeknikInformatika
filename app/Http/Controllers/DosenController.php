<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Mahasiswa with their Dosen Wali
        $tahunAjaranList = TahunAjaran::all(); // Fetch all records
        $dosens = Dosen::all();
        // Pass the data to the view
        return view('monitor/dosen/dosen', compact('dosens', 'tahunAjaranList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = auth('dosen')->user();
        // Check if the user has the 'kaprodi' role
        if ($dosen->role !== 'kaprodi') {
            return redirect()->route('dosen.index')->with('error', 'Anda tidak memiliki akses terhadap penambahan Dosen.');
        }
        $tahunAjaranList = TahunAjaran::all(); // Fetch all records
        return view('monitor/dosen/tambah-dosen', compact('tahunAjaranList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_dosen' => 'required',
            'npp' => 'required|unique:dosen', // Ensures NPP is unique
            'email_dosen' => 'required|email|unique:dosen', // Ensures email is unique and valid
            'password_dosen' => 'required', // Password must be at least 8 characters
        ]);

        // Hash the password before saving
        $validateData['password_dosen'] = Hash::make($request->password_dosen);

        // Store the data
        Dosen::create($validateData);

        // Redirect with a success message
        return redirect()->route('dosen')
            ->with('success', 'Dosen berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete(); // Delete the selected Matakuliah
        return redirect()->route('dosen.index')
            ->with('success', 'Matakuliah berhasil dihapus!');
    }
}
