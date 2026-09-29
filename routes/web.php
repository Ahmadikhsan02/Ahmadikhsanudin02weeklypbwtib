<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "home",
    ]);
});
Route::get('/berita', function () {
    return view('berita',[
        "title" => "berita",
    ]);
});
Route::get('/kontak', function () {
    return view('kontak',[
        "title" =>"kontak"
    ]);
});
Route::get('/profil', function () {
    return view('profil',[
        "title" => "profil"
    ]); 
   
});
