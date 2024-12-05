<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaResController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Get the logged-in dosen
        $dosen = auth('dosen')->user();

        // Check if the logged-in dosen has the role 'kaprodi' or 'dosen'
        if ($dosen->role == 'kaprodi') {
            // If the role is 'kaprodi', show all Mahasiswa
            $mahasiswa = Mahasiswa::with(['dosenWali', 'tahunAjaran'])->get();
        } else {
            // If the role is 'dosen', show only Mahasiswa assigned to this dosen
            $mahasiswa = Mahasiswa::with(['dosenWali', 'tahunAjaran'])
                ->where('dosen_wali', $dosen->id)
                ->get();
        }

        // Fetch all Tahun Ajaran records
        $tahunAjaranList = TahunAjaran::all();

        // Pass the data to the view
        return view('monitor/mahasiswa/mahasiswa', compact('mahasiswa', 'tahunAjaranList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = auth('dosen')->user();
        // Check if the user has the 'kaprodi' role
        if ($dosen->role !== 'kaprodi') {
            return redirect()->route('mahasiswa.index')->with('error', 'Anda tidak memiliki akses terhadap penambahan mahasiswa.');
        }

        $tahunAjaranList = TahunAjaran::all(); // Fetch all records
        $alltahunajaran = TahunAjaran::all(); // Fetch all records
        $alldoswal = Dosen::all();
        return view('monitor/mahasiswa/tambah-mahasiswa', compact('alltahunajaran', 'tahunAjaranList', 'alldoswal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_mhs' => 'required',
            'nim' => 'required',
            'id_tahunajaran' => 'required',
            'dosen_wali' => 'required',
        ]);

        Mahasiswa::create($validateData);
        // Redirect to the index page with a success message
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $tahunAjaranList = TahunAjaran::all(); // Fetch all TahunAjaran records
        // $alltahunajaran = TahunAjaran::all(); // Fetch all records
        $alldoswal = Dosen::all(); // Fetch all Dosen records

        return view('monitor/mahasiswa/edit-mahasiswa', compact('mahasiswa', 'tahunAjaranList', 'alldoswal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nama_mhs' => 'required',
            'nim' => 'required',
            'id_tahunajaran' => 'required',
            'dosen_wali' => 'required',
            'status' => 'required',
        ]);

        $mahasiswa->update($validateData);

        // Redirect back to the mahasiswa index with a success message
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data Mahasiswa berhasil diperbarui!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete(); // Delete the selected Matakuliah
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil dihapus!');
    }

    public function import(Request $request)
    {
        $dosen = auth('dosen')->user();
        // Check if the user has the 'kaprodi' role
        if ($dosen->role !== 'kaprodi') {
            return redirect()->route('mahasiswa.index')->with('error', 'Anda tidak memiliki akses terhadap penambahan mahasiswa.');
        }

        $request->validate([
            'file' => 'required|mimes:xlsx,xls|max:2048', // Validate file type and size
        ]);

        // Retrieve the uploaded file
        $file = $request->file('file');

        // Use Laravel Excel to import data
        try {
            Excel::import(new MahasiswaImport, $file);
            return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil di import!');
        } catch (\Exception $e) {
            return redirect()->route('mahasiswa.index')->with('error', 'Terdapat kesalahan import: ' . $e->getMessage());
        }
    }
}
