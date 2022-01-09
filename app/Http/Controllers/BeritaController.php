<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('news' , [
            "title" => "NEWS",
            "news" => Berita::all()
            ]);
    }
    
    public function show(Berita $news_detil)
    {
        return view('news_detil', [
            "title" => "News Detil",
            "news_posts" => $news_detil
        ]);
    }
}