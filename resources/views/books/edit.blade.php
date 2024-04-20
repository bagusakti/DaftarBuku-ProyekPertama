@extends('partials.main')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Daftar Buku Tahun 2024</h1>
    <p class="lead">Praktik Proyek Pertama - Tabel CRUD Daftar Buku 2024</p>
    <div class="d-flex flex-row-reverse mt-5">
        <a href="{{ route('books.index') }}" class="btn btn-outline-primary mb-2 p-2">Kembali</a>
    </div>
    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Buku: </label>
            <input type="text" name="name" value="Contoh Value" class="form-control" placeholder="Masukkan Nama Buku">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Nama Author: </label>
            <input type="text" name="author" value="{{ $book->author }}" class="form-control" placeholder="Masukkan Nama Author">
        </div>
        <div class="mb-3">
            <label for="page" class="form-label">Jumlah Halaman</label>
            <input type="number" name="page" value="{{ $book->page }}" class="form-control" placeholder="Masukkan Jumlah Halaman">
        </div>
        <div class="d-flex flex-row-reverse mt-3">
            <button type="submit" class="btn btn-success">Perbarui Buku!</button>
        </div>
    </form>
</div>
@endsection
