<?php

namespace App\Http\Controllers;
use App\Models\Obat;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function dashboard()
    {
        $obats = Obat::take(3)->get();
        return view('dashboardUser', compact('obats'));
    }

    public function index()
    {
        $obats = Obat::paginate(12); // Perbaiki variabel
        return view('obat', compact('obats')); // Perbaiki compact
    }
}
