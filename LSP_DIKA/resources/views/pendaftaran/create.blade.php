@extends('layouts.main')

@section('content')
    <div class="p-4">
        <h1 class="text-3xl font-bold text-center mb-8">Formulir Penerimaan Mahasiswa Baru</h1>
        <h3 class="text-2xl text-center mb-6">Universitas BackBurner</h3>
        <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="bg-teal-100 mx-auto p-6 rounded-lg shadow-md max-w-4xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Program Studi -->
                    <div class="mb-4">
                        <label for="program_studi" class="block text-sm font-medium text-gray-700">Program Studi:</label>
                        <select id="program_studi" name="program_studi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </div>

                    <!-- Nama Depan -->
                    <div class="mb-4">
                        <label for="nama_depan" class="block text-sm font-medium text-gray-700">Nama Depan:</label>
                        <input type="text" id="nama_depan" name="nama_depan" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                    <!-- Nama Belakang -->
                    <div class="mb-4">
                        <label for="nama_belakang" class="block text-sm font-medium text-gray-700">Nama Belakang:</label>
                        <input type="text" id="nama_belakang" name="nama_belakang" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                    <!-- Nomor NIK -->
                    <div class="mb-4">
                        <label for="nomor_nik" class="block text-sm font-medium text-gray-700">Nomor NIK:</label>
                        <input type="text" id="nomor_nik" name="nomor_nik" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                    <!-- Nomor HP -->
                    <div class="mb-4">
                        <label for="nomor_hp" class="block text-sm font-medium text-gray-700">Nomor Telepon:</label>
                        <input type="tel" id="nomor_hp" name="nomor_hp" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-4">
                        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-4 col-span-2">
                        <span class="block text-sm font-medium text-gray-700">Jenis Kelamin:</span>
                        <div class="mt-1 flex items-center space-x-4">
                            <div class="flex items-center">
                                <input type="radio" id="jenis_kelamin_l" name="jenis_kelamin" value="L" required class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300">
                                <label for="jenis_kelamin_l" class="ml-2 text-sm text-gray-600">Laki-laki</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="jenis_kelamin_p" name="jenis_kelamin" value="P" required class="h-4 w-4 text-teal-600 focus:ring-teal-500 border-gray-300">
                                <label for="jenis_kelamin_p" class="ml-2 text-sm text-gray-600">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <!-- Alamat -->
                    <div class="mb-4 col-span-2">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
                        <textarea id="alamat" name="alamat" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm"></textarea>
                    </div>

                    <!-- Foto Profil -->
                    <div class="mb-4">
                        <label for="foto_profile" class="block text-sm font-medium text-gray-700">Foto Profil:</label>
                        <input type="file" id="foto_profile" name="foto_profile" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                    <!-- Asal Sekolah -->
                    <div class="mb-4">
                        <label for="asal_sekolah" class="block text-sm font-medium text-gray-700">Asal Sekolah:</label>
                        <input type="text" id="asal_sekolah" name="asal_sekolah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                    </div>

                   
                </div>

                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">Kirim Pendaftaran</button>
                </div>
            </div>
        </form>
    </div>
@endsection
