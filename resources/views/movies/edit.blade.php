@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Edit Film</h1>

    <!-- Form Card -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $movie->title) }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                          class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                          required>{{ old('description', $movie->description) }}</textarea>
            </div>

            <!-- Genre -->
            <div class="mb-4">
                <label for="genre" class="block text-sm font-medium text-gray-700 mb-2">Genre</label>
                <input type="text" name="genre" id="genre" value="{{ old('genre', $movie->genre) }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Director -->
            <div class="mb-4">
                <label for="director" class="block text-sm font-medium text-gray-700 mb-2">Sutradara</label>
                <input type="text" name="director" id="director" value="{{ old('director', $movie->director) }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Release Year -->
            <div class="mb-4">
                <label for="release_year" class="block text-sm font-medium text-gray-700 mb-2">Tahun Rilis</label>
                <input type="number" name="release_year" id="release_year" value="{{ old('release_year', $movie->release_year) }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                       required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <a href="{{ route('movies.index') }}"
                   class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300 mr-2">
                    Batal
                </a>
                <button type="submit"
                        class="px-4 py-2 bg-indigo-500 text-white rounded-lg shadow hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-300">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
