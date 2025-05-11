<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboardAdmin', function (){
    return view('dashboard_ADM');
});