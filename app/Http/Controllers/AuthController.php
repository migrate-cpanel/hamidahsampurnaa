<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = Admin::where('email', $credentials['email'])->first();

        // Cek jika user tidak ada atau password salah
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            // Kembalikan ke halaman login dengan pesan error
            return back()->with('error', 'Email atau Password salah.');
        }

        // Jika berhasil, loginkan user
        Auth::login($user);
        $request->session()->regenerate();

        // Arahkan ke halaman yang dituju setelah login, defaultnya 'dashboard'
        return redirect()->intended('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('logout', 'Anda telah berhasil logout.');
    }
}