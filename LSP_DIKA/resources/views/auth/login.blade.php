@extends('layouts.main')

@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center bg-[#F9DBBA]">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <h2 class="text-center text-3xl font-bold text-[#1A4870]">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-[#1A4870]">Email</label>
                    <input id="email" class="block mt-1 w-full px-4 py-2 border border-[#5B99C2] rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#1A4870] focus:border-transparent" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    @error('email')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-[#1A4870]">Password</label>
                    <input id="password" class="block mt-1 w-full px-4 py-2 border border-[#5B99C2] rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#1A4870] focus:border-transparent" type="password" name="password" required autocomplete="current-password" />
                    @error('password')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#5B99C2] shadow-sm focus:ring-[#1A4870]" name="remember">
                        <span class="ml-2 text-sm text-[#1F316F]">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class=" text-sm text-[#5B99C2] hover:text-[#1A4870]" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                    
                    <button type="submit" class="ml-3 px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1F316F]">
                        Log in
                    </button>
                </div>
                <div class="mt-1 text-start">
                        <p class=" text-sm text-[#1F316F]">
                            Belum punya akun? <a href="{{ route('register') }}" class="text-red-500 hover:text-teal-800">Sign Up</a>
                        </p>
                    </div>
            </form>

            
        </div>
    </div>
@endsection
