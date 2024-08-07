@extends('layouts.main')

@section('content')
    <div class="p-4">
        <h1 class="text-3xl font-bold text-center mb-8 text-teal-700">Biaya Perkuliahan</h1>
        <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Bagian Atas Kiri -->
                <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                    <h2 class=" text-2xl text-center font-bold text-blue-600 mb-4 ">Akuntansi</h2>
                    <div class="flex flex-col space-y-2">
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Pendaftaran:</span>
                            <span class="text-teal-700">Rp 500.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Semester:</span>
                            <span class="text-teal-700">Rp 5.000.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Lainnya:</span>
                            <span class="text-teal-700">Rp 1.000.000</span>
                        </div>
                    </div>
                </div>

                <!-- Bagian Atas Kanan -->
                <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-2xl text-center font-bold text-blue-600 mb-4">Manajemen</h2>
                    <div class="flex flex-col space-y-2">
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Pendaftaran:</span>
                            <span class="text-teal-700">Rp 500.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Semester:</span>
                            <span class="text-teal-700">Rp 5.500.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Lainnya:</span>
                            <span class="text-teal-700">Rp 1.200.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Bagian Bawah Kiri -->
                <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-2xl text-center font-bold text-blue-600 mb-4">Informatika</h2>
                    <div class="flex flex-col space-y-2">
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Pendaftaran:</span>
                            <span class="text-teal-700">Rp 500.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Semester:</span>
                            <span class="text-teal-700">Rp 6.000.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Lainnya:</span>
                            <span class="text-teal-700">Rp 1.500.000</span>
                        </div>
                    </div>
                </div>

                <!-- Bagian Bawah Kanan -->
                <div class="bg-teal-100 p-4 rounded-lg shadow-md">
                    <h2 class="text-2xl text-center font-bold text-blue-600 mb-4">Sistem Informasi</h2>
                    <div class="flex flex-col space-y-2">
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Pendaftaran:</span>
                            <span class="text-teal-700">Rp 500.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Semester:</span>
                            <span class="text-teal-700">Rp 5.800.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-semibold text-teal-800">Biaya Lainnya:</span>
                            <span class="text-teal-700">Rp 1.300.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
