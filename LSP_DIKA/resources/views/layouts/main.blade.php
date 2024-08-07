<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .dropdown-menu {
            z-index: 50;
        }
    </style>
</head>
<body class="bg-slate-100">

    <!-- Navbar -->
    <nav class="bg-white text-black shadow-md p-4 px-40 relative">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Left Side: Logo and Text -->
            <a href="/" class="flex items-center space-x-2">
                <img src="{{ asset('BackBurner_logo.png') }}" alt="Logo" class="h-10 w-10 object-contain"> <!-- Ganti dengan path logo Anda -->
                <span class="text-xl font-bold">BackBurner University</span>
            </a>

            <!-- Right Side: Navigation Links -->
            <div class="hidden md:flex space-x-4 items-center">
                <a href="{{ route('biaya-perkuliahan') }}" class="hover:underline">Biaya Perkuliahan</a>
                <a href="{{ route('tutorial') }}" class="hover:underline">Tutorial</a>
                <a href="{{ route('pengumuman.index') }}" class="hover:underline">Pengumuman</a>

                <!-- Dropdown Menu -->
                @auth
                <div class="relative dropdown-menu">
                    <button id="dropdownMenuButton" class="flex items-center space-x-2 hover:underline">
                        <span>{{ Auth::user()->nama_depan }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="dropdownMenu" class="absolute right-0 w-48 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg hidden">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Log Out</button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>
    </nav>

    <!-- Main content -->
    <div class="container mx-auto">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="mb-4">&copy; 2024 Penerimaan Siswa Baru. All rights reserved.</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('dropdownMenuButton').addEventListener('click', function() {
            document.getElementById('dropdownMenu').classList.toggle('hidden');
        });

        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.remove('-translate-x-full');
        });

        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.add('-translate-x-full');
        });
    </script>
</body>
</html>
