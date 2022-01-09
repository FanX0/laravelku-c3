@extends('layouts.main')

@section('container')
        <div class="contrainer mt-4">
        @foreach($news as $news_posts)
          <article>
            <h2> <a href="/news/{{ $news_posts->slug }}">{{ $news_posts->judul_berita }}</a></h2>
            <p>{{ $news_posts->excerpt }}</p>
          </article>
        @endforeach
      </div>
@endsection