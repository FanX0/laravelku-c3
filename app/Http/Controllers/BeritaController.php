<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('karakter' , [
            "title" => "Karakter",
            "karakter" => Karakter::all()
            ]);
    }
    
    public function show(Karakter $news_detil)
    {
        return view('more_karakter', [
            "title" => "News Detil",
            "news_posts" => $more_karakter
        ]);
    }
}