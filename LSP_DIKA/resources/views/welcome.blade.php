@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <!-- <section class="bg-blue-500 text-white text-center py-20 rounded-md">
        <div class="container mx-auto">
            <h1 class="text-4xl font-extrabold mb-4">Universitas Multi Data Palembang</h1>
            <h3 class="text-lg mb-2">Pendaftaran Online</h3>
            <h5 class="text-start mb-2">Pendaftaran Online Menerima Program Sarjana (D4-S1) dan Program Pascasarjana (S2-S3)</h5>
            <div class="flex justify-center space-x-4">
                <a href="#signin" class="bg-white text-blue-500 px-6 py-2 rounded-md shadow-md hover:bg-gray-100">Sign In</a>
                <a href="#register" class="bg-yellow-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-yellow-600">Daftar</a>
            </div>
        </div>
    </section> -->

    <section class="relative bg-blue-300 text-white text-center py-20 rounded-md">
    <div class="inset-0 flex items-center justify-center bg-white bg-opacity-50">
        <div class="bg-white text-black p-8 rounded-md shadow-lg max-w-lg mx-4">
            <h1 class="text-6xl font-bold ">BackBurner</h1>
            <h2 class="text-4xl font-bold mb-4">University</h2>
            <h3 class="text-lg mb-2">Pendaftaran Online</h3>
            <h5 class="text-start mb-2">Pendaftaran Online Menerima Program Sarjana (D4-S1) dan Program Pascasarjana (S2-S3)</h5>
            <div class="flex justify-center space-x-4 mt-6">
                <a href="login" class="bg-blue-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-600">Bergabung Sekarang</a>
            </div>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section id="about_landing_page" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Tentang Kampus</h2>
            <p class="text-lg mb-4">Kampus ini menawarkan berbagai program studi yang dirancang untuk memberikan keterampilan dan pengetahuan yang diperlukan untuk kesuksesan di dunia profesional.</p>
            <p class="text-lg">Kami memiliki fasilitas modern, staf pengajar berkualitas, dan program yang terus berkembang untuk memastikan bahwa Anda mendapatkan pendidikan terbaik.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact_landing_page" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Kontak Kami</h2>
            <p class="text-lg">Untuk informasi lebih lanjut, jangan ragu untuk menghubungi kami di email: <a href="mailto:info@University.com" class="text-blue-600 hover:underline">info@University.com</a></p>
        </div>
    </section>
@endsection
