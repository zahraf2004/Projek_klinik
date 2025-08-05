<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Chatify\Chatify;
use App\Http\Controllers\RegisterPasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\AppointmentController;

// Route tampil login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk login
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//route register
Route::get('/register', function (){
    return view('register');
});
Route::post('/register', [RegisterPasienController::class, 'register'])->name('register.pasien');

//route chatify
Route::group(['middleware' => ['auth']], function () {
    Route::get('/chatify', [\Chatify\Http\Controllers\MessagesController::class, 'index'])->name('chatify');
});

Route::get('/tele', function (){
    return view('tele');
});

Route::get('/riwayat', [AppointmentController::class, 'riwayat'])->name('riwayat');


// route untuk dokter

// route untuk user
Route::get('/isi-janji-temu', function (){
    return view('form_appointment');
});
Route::post('/isi-janji-temu', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/pilih-Dokter', [DokterController::class, 'index'])->name('dokter.index');

//route keseluruhan
Route::get('/', [ObatController::class, 'homepage'])->name('homepage');
Route::get('/dashboard', [ObatController::class, 'dashboard'])->name('dashboard');
Route::get('/obat', [ObatController::class, 'index'])->name('obat.index');
Route::get('/tentang-kami', function (){
    return view('about');
});
Route::get('/layanan-kami', function (){
    return view('layanan');
});
Route::get('/kontak-kami', function (){
    return view('contact');
});