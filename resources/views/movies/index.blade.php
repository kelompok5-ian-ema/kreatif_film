@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Daftar Film</h1>

    <div class="mb-4">
        <a href="{{ route('movies.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Film</a>
    </div>

    @if($movies->isEmpty())
        <p>Belum ada film yang ditambahkan.</p>
    @else
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Judul</th>
                    <th class="border px-4 py-2">Deskripsi</th>
                    <th class="border px-4 py-2">Genre</th>
                    <th class="border px-4 py-2">Tahun Rilis</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <td class="border px-4 py-2">{{ $movie->title }}</td>
                        <td class="border px-4 py-2">{{ $movie->description }}</td>
                        <td class="border px-4 py-2">{{ $movie->genre }}</td>
                        <td class="border px-4 py-2">{{ $movie->release_year }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('movies.edit', $movie->id) }}" class="text-blue-500">Edit</a>
                            |
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
