<!-- resources/views/admin/verify-users.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold text-teal-800 mb-4">Pending Users Verification</h1>

        <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-6">Daftar Pendaftaran</h2>
        <a href="" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700">Tambah Pendaftaran</a>
        
        <table class="min-w-full mt-6">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">Nama Depan</th>
                    <th class="px-4 py-2 border">Nama Belakang</th>
                    <th class="px-4 py-2 border">Nomor HP</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Role</th>
                    <th class="px-4 py-2 border">Status</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-4 py-2 border">{{ $user->nama_depan }}</td>
                        <td class="px-4 py-2 border">{{ $user->nama_belakang }}</td>
                        <td class="px-4 py-2 border">{{ $user->nomor_hp }}</td>
                        <td class="px-4 py-2 border">{{ $user->email }}</td>
                        <td class="px-4 py-2 border">{{ $user->role }}</td>
                        <td class="px-4 py-2 border">
                            @if($user->status == 'pending')
                                <div class="status-df flex gap-2">
                                    <div>Status:</div>
                                    <form action="{{ route('user.validate_admin', ['id' => $user->id]) }}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <div class="flex gap-2 status-acc mt-2">
                                            <button type="submit" value="aktif" name="validatorAdmin" id="valid-accept" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                                                Terima
                                            </button>
                                            atau
                                            <button type="submit" value="ditolak" name="validatorAdmin" id="valid-reject" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                                Tolak
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            @elseif($user->status == 'aktif')
                                <div class="font-semibold text-sm bg-green-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                    Aktif
                                </div>
                            @elseif($user->status == 'ditolak')
                                <div class="font-semibold text-sm bg-red-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                    Tidak Aktif
                                </div>
                            @endif
                        </td>
                        <td class="px-4 py-2 border">
                            <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                            <!-- Add additional actions if necessary -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>
@endsection
