<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Chatify\Chatify;
use App\Http\Controllers\RegisterPasienController;

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

Route::get('/dashboard', function (){
    return view('dashboard_ADM');
});

Route::get('/obat', function (){
    return view('obat');
});
Route::get('/homepage', function (){
    return view('homepage');
});
Route::get('/obat2', function (){
    return view('obat2');
});