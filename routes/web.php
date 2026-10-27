<?php
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

// Cukup tulis begini — TIDAK perlu return view di sini!
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita');

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak"
    ]);
});
Route::get('/berita', [BeritaController::class, 'tampilBerita']);

Route::get('/berita/slug', [BeritaController::class, 'getBerita']); 

{

};

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
