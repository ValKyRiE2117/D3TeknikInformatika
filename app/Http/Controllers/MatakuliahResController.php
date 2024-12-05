<?php

namespace App\Http\Controllers;

use App\Imports\MatakuliahsImport;
use App\Models\Matakuliah;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class MatakuliahResController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getSidebarData()
    {
        $tahunAjaranList = TahunAjaran::all(); // Fetch all records
        return $tahunAjaranList;
    }
    public function index()
    {
        // Retrieve all Matakuliah along with their Dosen via the Jadwal relationship
        $tahunAjaranList = $this->getSidebarData();
        $matakuliahs = Matakuliah::all();
        // Pass the data to the view
        return view('monitor/matakuliah/matakuliah', compact('matakuliahs', 'tahunAjaranList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = auth('dosen')->user();
        // Check if the user has the 'kaprodi' role
        if ($dosen->role !== 'kaprodi') {
            return redirect()->route('matakuliah.index')->with('error', 'Anda tidak memiliki akses terhadap penambahan matakuliah.');
        }
        // Get TahunAjaran data
        $tahunAjaranList = $this->getSidebarData();
        return view('monitor.matakuliah.tambah-matakuliah', compact('tahunAjaranList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_matkul' => 'required',
            'kode_matkul' => 'required|unique:matakuliah,kode_matkul',
            'sks' => 'required',
            'jenis' => 'required',
            'kelompok' => 'required'
        ]);

        Matakuliah::create($validateData);
        // Redirect to the index page with a success message
        return redirect()->route('matakuliah.index')
            ->with('success', 'Matakuliah berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliah $matakuliah)
    {
        // Retrieve all Matakuliah along with their Dosen via the Jadwal relationship
        $tahunAjaranList = $this->getSidebarData();
        // Pass the data to the view
        return view('monitor.matakuliah.edit-matakuliah', compact('matakuliah', 'tahunAjaranList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        // Validate the incoming data
        $validateData = $request->validate([
            'nama_matkul' => 'required|string',
            'kode_matkul' => "required",
            'sks' => 'required|integer',
            'jenis' => 'required|string',
            'kelompok' => 'required|string',
        ]);

        // Update the record
        $matakuliah->update($validateData);

        // Redirect with a success message
        return redirect()->route('matakuliah.index')
            ->with('success', 'Matakuliah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete(); // Delete the selected Matakuliah
        return redirect()->route('matakuliah.index')
            ->with('success', 'Matakuliah berhasil dihapus!');
    }

    public function import(Request $request)
    {
        
        $request->validate([
            'file' => 'required|mimes:xlsx,xls|max:2048', // Validate file type and size
        ]);

        // Retrieve the uploaded file
        $file = $request->file('file');

        // Use Laravel Excel to import data
        try {
            Excel::import(new MatakuliahsImport, $file);
            return redirect()->route('matakuliah.index')->with('success', 'File imported successfully!');
        } catch (\Exception $e) {
            return redirect()->route('matakuliah.index')->with('error', 'Error importing file: ' . $e->getMessage());
        }
    }
}