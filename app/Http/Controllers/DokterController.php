<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::paginate(12); // Perbaiki variabel
        return view('pilDokter', compact('dokters')); 
    }
}
