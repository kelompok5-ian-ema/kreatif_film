@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Tambah Film Baru</h1>

    <!-- Form Card -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('movies.store') }}" method="POST">
            @csrf

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       placeholder="Masukkan judul film" required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                          placeholder="Masukkan deskripsi film" required>{{ old('description') }}</textarea>
            </div>

            <!-- Genre -->
            <div class="mb-4">
                <label for="genre" class="block text-sm font-medium text-gray-700 mb-2">Genre</label>
                <input type="text" name="genre" id="genre" value="{{ old('genre') }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       placeholder="Masukkan genre film (misal: Drama, Komedi)" required>
            </div>

            <!-- Director -->
            <div class="mb-4">
                <label for="director" class="block text-sm font-medium text-gray-700 mb-2">Sutradara</label>
                <input type="text" name="director" id="director" value="{{ old('director') }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       placeholder="Masukkan nama sutradara" required>
            </div>

            <!-- Release Year -->
            <div class="mb-4">
                <label for="release_year" class="block text-sm font-medium text-gray-700 mb-2">Tahun Rilis</label>
                <input type="number" name="release_year" id="release_year" value="{{ old('release_year') }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       placeholder="Masukkan tahun rilis film" required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <a href="{{ route('movies.index') }}"
                   class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300 mr-2">
                    Batal
                </a>
                <button type="submit"
                        class="px-4 py-2 bg-indigo-500 text-white rounded-lg shadow hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">
                    Tambah Film
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
