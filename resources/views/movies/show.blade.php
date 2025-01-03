@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Film</h1>
    <p><strong>Judul:</strong> {{ $movie->title }}</p>
    <p><strong>Deskripsi:</strong> {{ $movie->description }}</p>
    <p><strong>Sutradara:</strong> {{ $movie->director }}</p>
    <p><strong>Tahun Rilis:</strong> {{ $movie->release_year }}</p>
    <a href="{{ route('movies.index') }}">Kembali</a>
</div>
@endsection
