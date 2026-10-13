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
        "beritas" => $data_berita,
    ]);
});
Route::get('/berita/slug', function ($slug) {

 $data_berita = [
    [
        "judul" => "mahasiswa",
        "slug" => "mahasiswa- ti",
        "penulis" => "admin",
        "konten" => "tydrstetyguhijolmknjbhvgcfxdaqwertyuiopppppppppppppoihgfdsdfghjk"
    ],
    [
        "judul" => "dosen ti",
        "slug" => "dosen-ti",
        "penulis" => " kita",
        "konten" => " asdfghjklqwertyuiopxcvbnmsdfghjkwertyuixcvbnrtyutgberthoij"
    ]
    ];
    $berita = [];
    foreach ($data_berita as $b)
    {
if($b["slug"]== $slug)
{
    $berita = $b;
}
}
return view('beritatunggal',[
"title" => $berita["judul"],
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
