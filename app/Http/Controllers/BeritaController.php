<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function tampilBerita()
    {
         return view('berita',[
        "title" => "berita",
        "beritas" => Berita::all(),
    ]);
    }
    public function getBerita($slug)
    {
        $beritas =Berita::all();
        foreach ($Beritas as $Berita)
            {
             if($berita['slug'] === $slug)
                {
                    $beritatunggal = $berita;
                }
            }
   return view('Beritatunggal', [
    "title" => $Beritatunggal['judul'],
    "berita"=> $beritatunggal, 
   ]);
    }
}
