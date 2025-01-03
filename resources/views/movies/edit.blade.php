@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Film</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" value="{{ $movie->title }}" required>
        </div>
        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" rows="3" required>{{ $movie->description }}</textarea>
        </div>
        <div>
            <label for="director">Sutradara</label>
            <input type="text" id="director" name="director" value="{{ $movie->director }}" required>
        </div>
        <div>
            <label for="release_year">Tahun Rilis</label>
            <input type="number" id="release_year" name="release_year" value="{{ $movie->release_year }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
