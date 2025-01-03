@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Tambah Film</h1>

    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium">Judul</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full px-4 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium">Deskripsi</label>
            <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-4 py-2 border rounded" required></textarea>
        </div>

        <div class="mb-4">
            <label for="director" class="block text-sm font-medium">Sutradara</label>
            <input type="text" name="director" id="director" class="mt-1 block w-full px-4 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label for="release_year" class="block text-sm font-medium">Tahun Rilis</label>
            <input type="number" name="release_year" id="release_year" class="mt-1 block w-full px-4 py-2 border rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded">Simpan</button>
    </form>
@endsection
