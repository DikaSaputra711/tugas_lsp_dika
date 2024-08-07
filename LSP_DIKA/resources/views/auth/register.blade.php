@extends('layouts.main')

@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-[#E0F7FA]">
        <!-- Header -->
        <h1 class="text-3xl font-bold text-teal-800 mb-6">
            Buat Akun
        </h1>

            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-6 bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
        @csrf

        <!-- Nama Depan -->
        <div>
            <x-input-label for="nama_depan" :value="__('Nama Depan')" class="text-teal-800" />
            <x-text-input id="nama_depan" class="block mt-1 w-full border border-teal-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600" type="text" name="nama_depan" :value="old('nama_depan')" required autofocus autocomplete="given-name" />
            <x-input-error :messages="$errors->get('nama_depan')" class="mt-2 text-red-600" />
        </div>

        <!-- Nama Belakang -->
        <div>
            <x-input-label for="nama_belakang" :value="__('Nama Belakang')" class="text-teal-800" />
            <x-text-input id="nama_belakang" class="block mt-1 w-full border border-teal-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600" type="text" name="nama_belakang" :value="old('nama_belakang')" required autocomplete="family-name" />
            <x-input-error :messages="$errors->get('nama_belakang')" class="mt-2 text-red-600" />
        </div>

        <!-- Nomor HP -->
        <div>
            <x-input-label for="nomor_hp" :value="__('Nomor HP')" class="text-teal-800" />
            <x-text-input id="nomor_hp" class="block mt-1 w-full border border-teal-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600" type="text" name="nomor_hp" :value="old('nomor_hp')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('nomor_hp')" class="mt-2 text-red-600" />
        </div>

        <!-- Bukti Pembayaran -->
        <div>
            <x-input-label for="bukti_pembayaran" :value="__('Bukti Pembayaran')" class="text-teal-800" />
            <x-text-input id="bukti_pembayaran" class="block mt-1 w-full border border-teal-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600" type="file" name="bukti_pembayaran" required />
            <x-input-error :messages="$errors->get('bukti_pembayaran')" class="mt-2 text-red-600" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-teal-800" />
            <x-text-input id="email" class="block mt-1 w-full border border-teal-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-teal-800" />
            <x-text-input id="password" class="block mt-1 w-full border border-teal-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-teal-800" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border border-teal-400 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="text-sm text-teal-600 hover:text-teal-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="bg-teal-600 hover:bg-teal-700 text-white">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    </div>
@endsection
