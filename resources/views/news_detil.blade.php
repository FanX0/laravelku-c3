@extends('layouts.main')
@section('container')
    <div class="container mt-4">
        <article>
            <h2 class="mb-5">{{ $news_posts->judul_berita }}</h2>

            <p>By. James P.Sulivan -> {{ $news_posts->category->nama }}</p>
            {!! $news_posts->isi_berita !!}

            <p><a href="/news">Kembali ke Berita</a></p>
        </article>
    </div>
@endsection