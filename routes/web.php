<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/tatatertib', function () {
    return view('tatatertib');
});

Route::get('/santri/form', [SantriController::class, 'form']);
Route::post('/santri/simpan', [SantriController::class, 'simpan']);
Route::get('/santri/daftar', [SantriController::class, 'daftar']);
