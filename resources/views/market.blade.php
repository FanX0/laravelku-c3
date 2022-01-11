<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/market.css">
</head>
<html>
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
                        <a class="nav-link {{ Request::is('news')?'active' :'' }}" href="/karakter">Karakter</a>
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


        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<body>
        <section class="hero-section">
          <div class="card-grid">
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/lcR3BvOFAAkv8f8RJKadTOjFbv4yiopnGVLYPNsPk6UZxdHrZxfrVjlVDoj4puI9Oow2Ghi-VISiPUCQNbKjLLzX7i3eBFCGkBlD=w600)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #1229</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/gvhwTVrnMltsUcHzh19M4_ZPLgL76d4UkKuK3tnmo2YL7j_LFOIs2L1gDuKEPCtc1CjZfjilBNPy-5Ixohkh0VzcZ0neVvBco8d3wQ=w600)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #2294</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/wuNhfs9SQer8h2mcqb0caGpyNOxwK-Bl-PSX6RRhumKiTpsZ-6P7gVmBGs4zUZsNRYUc4Hq0t2cWh-tR63pDE8bcpYfAZEmYUZe7=w600)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #3129</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            </li>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/j9AKZ1ZQpZTjFPQ1MD8B4XIIM4Z4r0DCyHnCDejcS70oDOyNxWWWo5xcN5dqX-14YzH33vphmtRf5STDSzBafGzV4oWy6O8Bgw29JCI=w600)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #4229</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/_FE4wT63TsSJSdUMP3Lfl3bftPVVIccFZ_3o_gLe8uKyB_pxZgOgTP8A0yXn8CFUCZ0t11_FbRjdMExMXHhEtHiqEQ-G0VHcYsEq=w286)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #4229</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/SHqycJoZ8_vHF5tPxAq44Iv-ttjxC5QK-zXoK5gaFBbbHZDKpAwa4aKfBXeVYyvq7INFGdYXTPg-O6ChBRKxmYyv-EGfM03M8qwfcXo=w286)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #7259</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/1okNxW_8BoXuXnu2qGnGr9VueCckUwzRnY-BiVR_-SP1u-pnfYxbCHtnduj1uT6bwKu8B9ZNPAkfWVymN3dcNk26Pgf_rfHQ4JQJpA=w286)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #2239</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            </li>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/04s7g6uCChcW2LtfEVuqEmAgTNtq1h7kVOL-ASe_r3igwYIrGx7AxVn7lQ7vlAKpzzPlavZ4mubzhpRI0mdegMmz8n_AfnkP8-Tg=w286)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #2129</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/MtxMFn7SCkw8ZhvXVXWT6ZvXpKkLxsvybnCExq4f7RieTE6WBncO1UmVXu4fqascCUjCId0REfg1Gcxyv-BcYkByHE51ZB8OBRpTYw=w600)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #0129</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
            <a class="card" href="#">
              <div class="card__background" style="background-image: url(https://lh3.googleusercontent.com/m5HJ1xK8HiNvXMkpcKVZub6tJbqDq2BV_DGsZGzxxdhf40DcBon6B3wlMm9uO2rdmkM4tZmKE3DY4plTxNhoswQ-NUqsdQMfOkK0=w600)"></div>
              <div class="card__content">
                <p class="card__category">MonstersNifty</p>
                <h3 class="card__heading">Nifty #1129</h3>
                <h3 class="card_bottom">1 <i class="fab fa-ethereum"></i></h3>
              </div>
            </a>
          <div>
        </section>
</body>
        <footer>
          <div class="text-center p-3" style="background-color: rgba(39, 39, 39, 0.2);">
            <p style="color:#fff;">© 2022 Copyright 202102335 Farid Azhari Nurcahyo</p>
      
          </div>
          <!-- Copyright -->
        </footer>
        <script src="https://kit.fontawesome.com/ea06b605ed.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


              