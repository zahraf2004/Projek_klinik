<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Chatify\Chatify;

// Route tampil login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk login
Route::post('/', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/chatify', [\Chatify\Http\Controllers\MessagesController::class, 'index'])->name('chatify');
});

Route::get('/dashboardAdmin', function (){
    return view('dashboard_ADM');
});