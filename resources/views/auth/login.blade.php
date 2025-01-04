@extends('layouts.app')

@section('content')
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('../images/hero-login.jpg');">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 flex items-center justify-center h-full flex-col">

            <!-- Teks Selamat datang di atas form -->
            <div class="text-white text-center mb-8">
                <h1 class="text-4xl font-bold">Selamat datang di website kami</h1>
                <h2 class="text-3xl font-semibold">KREATIF FILM</h2>
            </div>

            <!-- Form Login dengan blur dan ukuran yang lebih kecil -->
            <div class="w-full max-w-md mx-auto mt-10 bg-white bg-opacity-60 backdrop-blur-sm p-8 rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold mb-6 text-center">Masuk dulu boy!!</h1>

                <!-- Menampilkan error jika login gagal -->
                @if ($errors->any())
                    <p class="text-red-500 mb-4 text-center">{{ $errors->first() }}</p>
                @endif

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium">Emailmu</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border rounded-lg"
                            placeholder="Masukkan email yang valid" required value="{{ old('email') }}">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium">Passwordmu</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-3 border rounded-lg"
                            placeholder="Masukkan password" required>
                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg text-lg">Langsung masuk aja bolo</button>
                </form>

                <div class="mt-6 text-center">
                    <p>Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500">Daftar di sini</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
