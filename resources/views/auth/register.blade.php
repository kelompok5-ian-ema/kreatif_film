@extends('layouts.app')

@section('content')
<div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/hero-login.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-30"></div>
    <div class="relative z-10 flex items-center justify-center h-full flex-col">
        <div class="text-white text-center mb-8">
            <h1 class="text-4xl font-bold">Selamat datang di website</h1>
            <h2 class="text-3xl font-semibold">KREATIF FILM</h2>
        </div>
        <div class="w-full max-w-md mx-auto bg-white bg-opacity-60 backdrop-blur-sm p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-6 text-center">Register</h1>
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="text-red-500">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-6">
                    <label for="username" class="block text-sm font-medium">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-3 border rounded-lg"
                        placeholder="Masukkan username" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-3 border rounded-lg"
                        placeholder="Masukkan email yang valid" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-3 border rounded-lg"
                        placeholder="Masukkan password yang aman" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg text-lg">Register</button>
            </form>
            <div class="mt-6 text-center">
                <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Login di sini</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
