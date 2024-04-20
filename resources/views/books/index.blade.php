@extends('partials.main')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Daftar Buku Tahun 2024</h1>
    <p class="lead">Praktik Proyek Pertama - Tabel CRUD Daftar Buku 2024</p>
    <div class="d-flex flex-row-reverse mt-5">
        <a href="{{ route('books.create') }}" class="btn btn-outline-primary mb-2 p-2">Tambahkan Data</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Kategori</th>
                <th scope="col">Author</th>
                <th scope="col">Halaman</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $book->name }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->page }}</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('books.show', $book->id) }}">DETAIL</a>
                        <a class="btn btn-warning" href="{{ route('books.edit', $book->id) }}">EDIT</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <th scope="row"></th>
                <td>Tidak ada Buku yang Tersedia</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
    

