<?php
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "home",
    ]);
});
Route::get('/berita', [BeritaController::class, 'tampilBerita']);

Route::get('/berita/slug', [BeritaController::class, 'getBerita']); 

{
return view('beritatunggal',[
"title" => $berita["judul"],
]);
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
