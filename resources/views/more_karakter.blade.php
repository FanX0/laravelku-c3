@section('container')

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/news.css">
</head>


<nav class="navbar navbar-dark color:#111;">
  <div class="container">
    <class="navbar-brand" href="#"><img src="/img/logo.png" width="90px" alt="FanX" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span>Kategori</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/')?'active' :'' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about')?'active' :'' }}" href="/market">Market</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('news')?'active' :'' }}" href="/news">News</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
          data-bs-toggle="dropdown" aria-expanded="false">
          Selamat Datang, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi 
            bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                  Logout<button>
              </form>
            </li>
          </ul>
        </li>
        @else
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('login')?'active' :'' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </li>
      @endauth
      </ul>
    </div>
  </div>
</nav>

<body>
    <div class="container">
        <div class="card">
            <div class="content">
            <h3 class="mb-5">{{ $news_posts->judul_berita }}</h3>

            <p>By. James P.Sulivan -> {{ $news_posts->category->nama }}</p>
            {!! $news_posts->isi_berita !!}

            <p><a href="/news">Kembali ke Berita</a></p>
            </div>
    </div>
    </div>
</body>

</html>
<footer >
  <div class="text-center p-3 mt-5" style="background-color: rgba(39, 39, 39, 0.2);">
    <p style="color:#fff;">© 2022 Copyright 202102335 Farid Azhari Nurcahyo</p>
  </div>
  <!-- Copyright -->
</footer >
  
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>