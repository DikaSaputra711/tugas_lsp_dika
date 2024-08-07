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
                @if($pendaftar->foto_profile)
                    <div class="mb-4 md:col-span-2 flex justify-center">
                        <img src="{{ asset('storage/foto_profiles/' . $pendaftar->foto_profile) }}" alt="Foto Profil" class="w-32 h-32 object-cover rounded-full border border-gray-300">
                    </div>
                @endif
                
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Nama Depan</h3>
                    <p class="text-gray-900">{{ $pendaftar->nama_depan }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Nama Belakang</h3>
                    <p class="text-gray-900">{{ $pendaftar->nama_belakang }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Nomor NIK</h3>
                    <p class="text-gray-900">{{ $pendaftar->nomor_nik }}</p>
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
                    <h3 class="text-lg font-medium text-gray-700">Tanggal Lahir</h3>
                    <p class="text-gray-900">{{ $pendaftar->tanggal_lahir ? $pendaftar->tanggal_lahir->format('d-m-Y') : 'Tidak tersedia' }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-gray-700">Jenis Kelamin</h3>
                    <p class="text-gray-900">{{ $pendaftar->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-lg font-medium text-gray-700">Alamat</h3>
                    <p class="text-gray-900">{{ $pendaftar->alamat }}</p>
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-lg font-medium text-gray-700">Asal Sekolah</h3>
                    <p class="text-gray-900">{{ $pendaftar->asal_sekolah }}</p>
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-lg font-medium text-gray-700">Status Pendaftaran</h3>
                    <div class="status-akun flex text-sm font-medium text-gray-600">
                        @if($pendaftar->status_pendaftaran == 'Dalam Proses')
                            <form action="{{ route('pendaftaran.updateStatus', $pendaftar->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="flex gap-2 mt-2">
                                    <button type="submit" value="Diterima" name="status" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                                        Terima
                                    </button>
                                    <button type="submit" value="Ditolak" name="status" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                        Tolak
                                    </button>
                                </div>
                            </form>
                        @elseif($pendaftar->status_pendaftaran == 'Diterima')
                            <div class="font-semibold text-sm bg-green-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                Diterima
                            </div>
                        @else
                            <div class="font-semibold text-sm bg-red-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                Ditolak
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-between">
                @if(Auth::check() && Auth::user()->role == 'admin')
                    <a href="{{ route('pendaftaran.index') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                        Kembali ke Daftar Pendaftar
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                        Kembali ke Dashboard
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
