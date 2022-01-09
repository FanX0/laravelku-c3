@extends('layouts.main')

@section('container')
<div class="container mt-4">
<div class="row justify-content-center">
    <div class="col-lg-4">
      @if (session()->has('sukses'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('LoginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
       {{ session('LoginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        
      <main class="form-signin">
          <h1 class="row justify-content-center h3 mb-3 fw-normal">Form Login</h1>
          
          <form action="/login" method="POST">
            @csrf
            <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" 
            required value="{{ old('email') }}">
            <label for="email">Email address</label>
              @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
              @enderror
            </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary bg-warning" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Belum Register?<a href="/register"> Register Sekarang!!!</a></small>
        </main>
        </div>
    </div>
</div>
@endsection
<head>
  <link rel="stylesheet" href="/css/home.css">
</head>
