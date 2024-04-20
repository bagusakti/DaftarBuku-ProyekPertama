@extends('partials.main')

@section('content')
    
    <h1>Selamat Datang di Website Kami</h1>

    <h2>Anda Berada Di Halaman {{ $page }}</h2>
    <a href="/kedua">Ke Halaman Kedua</a>
    <br>
    <a href="{{ route('books.index') }}">Daftar Buku</a>

@endsection