<?php



namespace App\Http\Controllers;

use App\Models\Berita; // Pastikan model Berita sudah dibuat
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function show($slug)
    {
        // Cari data berita — di sini variabel $berita DIBUAT
        $berita = Berita::where('slug', $slug)->firstOrFail();

        // Kirim data ke view
        return view('beritatunggal', [
            'title' => $berita->judul,
            'berita' => $berita
        ]);
    }
}

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
