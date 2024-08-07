@extends('layouts.main')

@section('content')
    <div class="p-4">
        <h1 class="text-3xl font-bold text-center">Daftar Pendaftar</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-6 py-3 border-b">ID</th>
                        <th class="px-6 py-3 border-b">Nama Depan</th>
                        <th class="px-6 py-3 border-b">Nama Belakang</th>
                        <th class="px-6 py-3 border-b">Nomor HP</th>
                        <th class="px-6 py-3 border-b">Email</th>
                        <th class="px-6 py-3 border-b">Jenis Kelamin</th>
                        <th class="px-6 py-3 border-b">Alamat</th>
                        <th class="px-6 py-3 border-b">Program Studi</th>
                        @if(Auth::check() && Auth::user()->role == 'admin')
                            <th class="px-6 py-3 border-b">Status Pendaftaran</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftar as $data)
                        <tr class="cursor-pointer hover:bg-gray-100" onclick="window.location='{{ route('pendaftaran.show', $data->id) }}'">
                            <td class="px-6 py-4 border-b">{{ $data->id }}</td>
                            <td class="px-6 py-4 border-b">{{ $data->nama_depan }}</td>
                            <td class="px-6 py-4 border-b">{{ $data->nama_belakang }}</td>
                            <td class="px-6 py-4 border-b">{{ $data->nomor_hp }}</td>
                            <td class="px-6 py-4 border-b">{{ $data->email }}</td>
                            <td class="px-6 py-4 border-b">{{ $data->jenis_kelamin }}</td>
                            <td class="px-6 py-4 border-b">{{ $data->alamat }}</td>
                            <td class="px-6 py-4 border-b">{{ $data->program_studi }}</td>
                            @if(Auth::check() && Auth::user()->role == 'admin')
                                <td class="px-6 py-4 border-b">
                                    <div class="status-akun flex text-sm font-medium text-gray-600">    
                                        <div class="ml-16">
                                            @php
                                                $status = $data->status_pendaftaran;
                                            @endphp
                                            @if($status == 'Dalam Proses')
                                                <div class="status-df flex gap-2">
                                                    <form action="{{ route('pendaftaran.updateStatus', $data->id) }}" method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <div class="flex gap-2 status-acc mt-2">
                                                            <button type="submit" value="Diterima" name="updateStatus" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                                Terima
                                                            </button>
                                                            <button type="submit" value="Ditolak" name="updateStatus" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                                Tolak
                                                            </button>
                                                        </div>
                                                    </form>  
                                                </div>
                                            @elseif($status == 'Diterima')
                                                <div class="status-df flex">
                                                    <div class="font-semibold text-sm bg-green-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                                        Aktif
                                                    </div>
                                                </div>
                                            @else
                                                <div class="status-df flex">
                                                    <div class="font-semibold text-sm bg-red-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                                        Tidak Aktif
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex mt-6 items-start ">
                <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                       Kembali ke dashboard</a>
            </div>
        </div>
    </div>
@endsection
