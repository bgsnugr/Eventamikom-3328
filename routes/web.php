<?php

use Illuminate\Support\Facades\Route;

// 1. Rute Home
Route::get('/', function () {
    return view('welcome');
});

// 2. Rute Profil
Route::get('/profil', function () {
    return view('profil');
});

// 3. Rute Katalog
Route::get('/katalog', function () {
    return view('katalog');
});

// 4. Rute Bantuan
Route::get('/bantuan', function () {
    return view('bantuan');
});

// 5. Rute Kontak
Route::get('/kontak', function () {
    return view('kontak');
});