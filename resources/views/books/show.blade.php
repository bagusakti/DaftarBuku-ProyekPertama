@extends('partials.main')

@section('content')
    <div class="container text-center mt-5">
        <h1 class="display-4">Detail {{ $book->name }}</h1>

        <p class="lead">Praktik Proyek Pertama - Tabel CRUD Daftar Buku 2024</p>

        <li>Nama Buku = {{ $book->name }}</li>

        <li>Nama Author = {{ $book->author }}</li>

        <li>Jumlah Halaman = {{ $book->page }}</li>
        <br>
        
        <a href="{{ route('books.index') }}" class="btn btn-primary">Kembali</a>

    </div>
@endsection