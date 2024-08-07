@extends('layouts.main')

@section('content')
    <div class="p-4 max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center mb-8">Detail Pendaftar</h1>

        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-lg">
            <div class="mb-6">
                <h2 class="text-2xl font-semibold text-blue-600 mb-2">Informasi Pendaftar</h2>
                <p class="text-gray-600">Berikut adalah detail informasi dari pendaftar yang telah Anda pilih.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Nama Depan</h3>
                    <p class="text-gray-900">{{ $pendaftar->nama_depan }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Nama Belakang</h3>
                    <p class="text-gray-900">{{ $pendaftar->nama_belakang }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Nomor HP</h3>
                    <p class="text-gray-900">{{ $pendaftar->nomor_hp }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Email</h3>
                    <p class="text-gray-900">{{ $pendaftar->email }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Bukti Pembayaran</h3>
                    <p class="text-gray-900">
                        @if ($pendaftar->bukti_pembayaran)
                            <a href="{{ asset('storage/' . $pendaftar->bukti_pembayaran) }}" class="text-blue-600 hover:underline" target="_blank">Lihat Bukti Pembayaran</a>
                        @else
                            <span class="text-red-500">Belum Diupload</span>
                        @endif
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Role</h3>
                    <p class="text-gray-900">{{ $pendaftar->role }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Status</h3>
                    <p class="text-gray-900">{{ ucfirst($pendaftar->status) }}</p>
                </div>
            </div>

            <div class="mt-8 flex justify-between">
                <a href="{{ route('pendaftaran.index') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                    Kembali ke Daftar Pendaftar
                </a>
                <form action="{{ route('pendaftaran.verify', $pendaftar->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-green-600 transition duration-200">
                        Verifikasi Akun
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
