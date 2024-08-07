@extends('layouts.main')

@section('content')
    <div class="py-12 bg-teal-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-blue-900 flex items-center">
                    <!-- Logo -->
                    <img src="{{ asset('BackBurner_logo.png') }}" alt="Logo Kampus" class="h-20 w-20 object-contain mr-4">
                    
                    <div>
                        @if(Auth::check() && Auth::user()->role == 'admin')
                            <h2 class="text-3xl font-semibold mb-4">Selamat Datang, Admin!</h2>
                            <p class="mb-4">Anda berhasil login sebagai admin. Silakan pilih salah satu opsi di bawah ini untuk melanjutkan.</p>
                        @else
                            <h2 class="text-3xl font-semibold mb-4">Selamat Datang!</h2>
                            <p class="mb-4">Anda berhasil login. Sebagai mahasiswa, Anda dapat mengakses berbagai fitur yang tersedia untuk pendaftaran dan informasi lainnya.</p>
                        @endif
                    </div>
                </div>

                <div class="flex justify-center mt-6">
                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <!-- Buttons for admin role -->
                        <a href="{{ route('user.index') }}" class="px-4 py-2 mb-4 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300 mx-2">
                            {{ __('Verifikasi Akun') }}
                        </a>
                        <a href="{{ route('pendaftaran.index') }}" class="px-4 py-2 mb-4 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-300 mx-2">
                            {{ __('Verifikasi Pendaftar') }}
                        </a>
                    @else
                        <!-- Buttons for mahasiswa role -->
                        <a href="{{ route('pendaftaran.create') }}" class="px-4 py-2 mb-4 bg-blue-800 text-white rounded-lg hover:bg-teal-700 transition duration-300">
                            {{ __('Go to Pendaftaran') }}
                        </a>
                        <a href="{{ route('pendaftaran.index') }}" class="px-4 py-2 mb-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300 mx-2">
                            {{ __('Lihat Pendaftaran Anda') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
