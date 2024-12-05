<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class NilaiResController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all data from the Nilai table, including related Matakuliah and Mahasiswa
        $nilai = Nilai::with(['matakuliah', 'mahasiswa'])
            ->orderBy('created_at', 'desc') // Order by the latest created records
            ->get();

        // Pass the data to the view
        return view('monitor/nilai/nilai-mhs', [
            'nilai' => $nilai,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get the logged-in dosen
        $dosen = auth('dosen')->user();
        $loggedInDosenId = $dosen->id;

        // Fetch mahasiswa filtered only by dosen_wali, ordered by name
        $mahasiswa = Mahasiswa::where('dosen_wali', $loggedInDosenId)
            ->whereIn('status', ['aktif', 'tidak aktif']) // Filter by status
            ->orderBy('nim', 'asc') // Order by NIM ascending
            ->get();

        // Fetch all matakuliah, ordered by name
        $allmatakuliah = Matakuliah::orderBy('nama_matkul', 'asc')->get();

        // Pass the data to the view
        return view('monitor/nilai/input-nilai', [
            'mahasiswa' => $mahasiswa,
            'allmatakuliah' => $allmatakuliah,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'id_mhs' => 'required|exists:mahasiswa,id', // Ensure the mahasiswa exists
            'id_matkul' => 'required|exists:matakuliah,id', // Ensure the matakuliah exists
            'nilai_akhir' => ['required', 'numeric', 'regex:/^\d{1,3}(\.\d{1,2})?$/', 'min:0', 'max:100'], // Accept decimals up to 2 places
        ]);

        // Create a new Nilai record
        $nilai = new Nilai();
        $nilai->id_mhs = $request->input('id_mhs');
        $nilai->id_matkul = $request->input('id_matkul');
        $nilai->nilai_akhir = $request->input('nilai_akhir');
        $nilai->save(); // Save to the database

        // Redirect back with a success message
        return redirect()->route('input-nilai.create')->with('success', 'Nilai berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}