<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use App\Http\Requests\UpdateTahunAjaranRequest;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahunAjaranList = TahunAjaran::all(); // Fetch all records
        $alltahunajaran = TahunAjaran::all(); // Fetch all records for table
        return view('monitor/tahunajar/tahunajaran', compact('alltahunajaran', 'tahunAjaranList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = auth('dosen')->user();
        // Check if the user has the 'kaprodi' role
        if ($dosen->role !== 'kaprodi') {
            return redirect()->route('tahunajar.index')->with('error', 'Anda tidak memiliki akses terhadap penambahan tahun ajaran.');
        }

        $tahunAjaranList = TahunAjaran::all(); // Fetch all records
        return view('monitor/tahunajar/tambah-tahunajaran', compact('tahunAjaranList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'required',
            'semester' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);

        TahunAjaran::create($validateData);
        // Redirect to the index page with a success message
        return redirect()->route('tahunajar.create')
            ->with('success', 'Tahun Ajaran berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTahunAjaranRequest $request, TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TahunAjaran $tahunajar)
    {
        $tahunajar->delete();
        return redirect()->route('tahunajar.index')
            ->with('success', 'Tahun Ajaran berhasil dihapus!');
    }
}
