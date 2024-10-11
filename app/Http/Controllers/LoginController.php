<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('monitor/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email_dosen' => 'required',
            'password_dosen' => 'required'
        ]);

        // Rename 'password_dosen' to 'password' so Auth::attempt works
        $credentials['password'] = $credentials['password_dosen'];
        unset($credentials['password_dosen']);

        if (Auth::guard('dosen')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/sistem-monitoring-mahasiswa");
        }

        return back()->with("loginError", "Login Gagal!");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
