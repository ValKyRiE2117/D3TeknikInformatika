<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MonitorProfileController extends Controller
{
    public function index()
    {
        $tahunAjaranList = TahunAjaran::all(); // Fetch all records
        return view('monitor/profile ', compact('tahunAjaranList'));
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nama_dosen' => 'required|string|max:255',
            'npp' => 'required|string|max:20',
            'email_dosen' => 'required|email|max:255',
        ]);

        // Get the authenticated user
        $dosen = auth('dosen')->user();

        // Update the dosen's profile
        $dosen->update([
            'nama_dosen' => $request->input('nama_dosen'),
            'npp' => $request->input('npp'),
            'email_dosen' => $request->input('email_dosen'),
        ]);

        // Redirect back with a success message
        return back()->with('status', 'Profil berhasil diperbarui!');
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        # Get the authenticated user
        $dosen = auth('dosen')->user();

        # Check if the old password matches
        if (!Hash::check($request->old_password, $dosen->password_dosen)) {
            return back()->with("error", "Password Lama Salah!");
        }

        # Update the password
        Dosen::where('id', $dosen->id)->update([
            'password_dosen' => Hash::make($request->new_password),
        ]);

        return back()->with("status", "Password berhasil diubah!");
    }
}