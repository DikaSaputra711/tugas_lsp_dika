@extends('layouts.main')

@section('content')
    <div class="p-4 max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Daftar Pengumuman</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol Create -->
        <div class="mb-6 text-right">
            <a href="{{ route('pengumuman.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600 transition duration-200">
                Tambah Pengumuman
            </a>
        </div>

        <!-- Pengecekan apakah ada data pengumuman -->
        @if($pengumuman && $pengumuman->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($pengumuman as $item)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 relative">
                        <div class="absolute top-2 right-2 flex space-x-2">
                            <a href="{{ route('pengumuman.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </div>
                        <h2 class="text-xl font-semibold mb-2">{{ $item->judul }}</h2>
                        <p class="text-gray-700 mb-2">{{ $item->keterangan }}</p>
                        <p class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-600">Tidak ada pengumuman yang tersedia.</p>
        @endif
    </div>
@endsection
