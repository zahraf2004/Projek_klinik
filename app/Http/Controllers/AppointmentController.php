<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    // MENANGANI FORM SUBMIT
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'no_hp' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'keluhan' => 'required|string',
            'tanggal' => 'required|date|after_or_equal:today',
            'jam' => 'required',
        ]);

        Appointment::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'keluhan' => $request->keluhan,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'status' => 'pending',
        ]);

        return redirect()->route('riwayat')->with('success', 'Janji Berobat berhasil dikirim.');
    }

    // MENAMPILKAN RIWAYAT JANJI TEMU
    public function riwayat()
    {
        $appointments = Appointment::orderBy('created_at', 'desc')->get();
        return view('riwayat', compact('appointments'));
    }
}
