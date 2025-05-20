<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterPasienController extends Controller
{
    public function register(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'jk' => 'required|in:Perempuan,Laki-Laki',
            'email' => 'required|email|unique:users,email',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'password' => 'required|confirmed|min:6', // pastikan ada field name="password_confirmation"
        ]);

        // Simpan ke tabel users
        $user = User::create([
            'name' => $validated['nama'], // tambahkan baris ini
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'pasien',
        ]);

        // Simpan ke tabel pasien
        Pasien::create([
            'user_id' => $user->id,
            'nama' => $validated['nama'],
            'tgl_lahir' => $validated['tgl_lahir'],
            'jk' => $validated['jk'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
        ]);

        // Redirect atau return response
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
