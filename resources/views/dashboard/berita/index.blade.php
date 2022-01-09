@extends('dashboard.layouts.main')
@section('container')

    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
              <h1 class="m-0">Halaman Berita</h1>
            </div>
        </div>
    </div>
        <div class="card-body">
          @if (session()->has('sukses'))
          <div class="alert alert-succes" role="alert">
              {{ session('sukses') }}
          </div>
          @endif
          <a href="/dashboard/berita/create" class="btn btn-primary mb-3">Tambah Berita</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Judul Berita</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($berita as $berita)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $berita->judul_berita }}</td>
              <td>{{ $berita->category->nama }}</td>
              <td>
                <a href="/dashboard/berita/{{ $berita->slug }}" class="btn btn-info"><i class="far fa-eye nav-icon"></i></a>
                <a href="/dashboard/berita/{{ $berita->slug }}/edit" class="btn btn-warning"><i class="far fa-edit nav-icon"></i></a>
                <form action="/dashboard/berita/{{ $berita->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf 
                <button class="btn btn-danger" onclick="return confirm('Kamu Yakin Mau Menghapus Data Ini ?')"><i class="nav-icon fas fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection