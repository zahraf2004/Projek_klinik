<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Chatify\Chatify;
use App\Http\Controllers\RegisterPasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\AppointmentController;

// Route tampil login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk login
Route::post('/', [AuthController::class, 'login']);

//route register
Route::get('/register', function (){
    return view('register');
});
Route::post('/register', [RegisterPasienController::class, 'register'])->name('register.pasien');

//route chatify
Route::group(['middleware' => ['auth']], function () {
    Route::get('/chatify', [\Chatify\Http\Controllers\MessagesController::class, 'index'])->name('chatify');
});


Route::get('/homepage', function (){
    return view('homepage');
});
Route::get('/obat2', function (){
    return view('obat2');
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