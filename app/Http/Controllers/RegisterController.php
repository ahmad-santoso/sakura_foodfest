<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat dan simpan pengguna baru
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'level' => 'user'
        ]);

        // Jika berhasil, arahkan ke halaman login dengan pesan sukses
        if ($user) {
            return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
        }

        // Jika gagal, arahkan kembali ke halaman registrasi dengan pesan error
        return back()->withInput()->with('error', 'Terjadi kesalahan saat registrasi.');
    }

}
