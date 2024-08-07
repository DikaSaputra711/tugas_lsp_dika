@extends('layouts.main')

@section('content')
    <div class="p-4">
        <h1 class="text-3xl font-bold text-center mb-8 text-teal-700">Tutorial Pendaftaran Universitas</h1>
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 space-y-6">
            <p class="text-lg mb-4">
                Berikut adalah panduan lengkap untuk mendaftar ke universitas kami. Ikuti langkah-langkah di bawah ini untuk memastikan proses pendaftaran Anda berjalan lancar.
            </p>

            <!-- Langkah 1 -->
            <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-teal-600 mb-4">Langkah 1: Persiapkan Dokumen</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li>Formulir pendaftaran yang telah diisi</li>
                    <li>Fotokopi KTP atau Kartu Identitas lainnya</li>
                    <li>Ijazah terakhir dan transkrip nilai</li>
                    <li>Pas foto terbaru</li>
                    <li>Dokumen pendukung lainnya (jika ada)</li>
                </ul>
            </div>

            <!-- Langkah 2 -->
            <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-teal-600 mb-4">Langkah 2: Isi Formulir Pendaftaran</h2>
                <p class="mb-4">
                    Kunjungi halaman <a href="{{ route('pendaftaran.create') }}" class="text-teal-600 hover:underline">Formulir Pendaftaran</a> dan isi data yang diperlukan dengan benar. Pastikan semua informasi yang dimasukkan akurat dan sesuai dengan dokumen yang telah disiapkan.
                </p>
            </div>

            <!-- Langkah 3 -->
            <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-teal-600 mb-4">Langkah 3: Unggah Dokumen</h2>
                <p class="mb-4">
                    Setelah mengisi formulir pendaftaran, unggah semua dokumen yang telah disiapkan melalui halaman yang sama. Dokumen tersebut akan diverifikasi oleh pihak universitas.
                </p>
            </div>

            <!-- Langkah 4 -->
            <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-teal-600 mb-4">Langkah 4: Verifikasi dan Konfirmasi</h2>
                <p class="mb-4">
                    Setelah mengunggah dokumen, Anda akan menerima email konfirmasi mengenai status pendaftaran Anda. Jika ada informasi tambahan atau dokumen yang diperlukan, Anda akan dihubungi melalui email atau telepon.
                </p>
            </div>

            <!-- Langkah 5 -->
            <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-teal-600 mb-4">Langkah 5: Pembayaran</h2>
                <p class="mb-4">
                    Jika pendaftaran Anda diterima, Anda akan diminta untuk melakukan pembayaran biaya pendaftaran. Informasi lebih lanjut mengenai pembayaran akan diberikan melalui email atau dapat diakses di halaman <a href="{{ route('biaya-perkuliahan') }}" class="text-teal-600 hover:underline">Biaya Perkuliahan</a>.
                </p>
            </div>
        </div>
    </div>
@endsection
