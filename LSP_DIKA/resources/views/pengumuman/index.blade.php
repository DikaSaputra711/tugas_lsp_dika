@extends('layouts.main')

@section('content')
    <div class="p-4 max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Daftar Pengumuman</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(Auth::check() && Auth::user()->role == 'admin')
            <div class="mb-6">
                <a href="{{ route('pengumuman.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600 transition duration-200">
                    Tambah Pengumuman
                </a>
            </div>
        @endif

        <div class="space-y-6">
            @foreach($pengumuman as $item)
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 relative">
                    <h2 class="text-xl font-asemibold mb-2">{{ $item->judul }}</h2>
                    <p class="text-gray-700 mb-2 text-base">{{ $item->keterangan }}</p>
                    <p class="text-gray-500 text-sm">{{ $item->tanggal->format('d-m-Y') }}</p>

                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <div class=" top-2 right-2 space-x-2">
                            <a href="{{ route('pengumuman.edit', $item->id) }}" class="text-blue-500 hover:underline text-sm">Edit</a>
                            <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline text-sm">Hapus</button>
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
