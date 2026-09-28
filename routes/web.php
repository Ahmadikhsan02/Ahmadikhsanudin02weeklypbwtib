<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/profil', function () {
    return view('profil');
});
