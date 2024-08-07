<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function showPendingUsers()
    {
        // Ambil semua pengguna dengan status pending
        $pendingUsers = User::where('role', 'calon_mahasiswa')
                            ->where('status', 'pending')
                            ->get();

        return view('admin.verify-users', compact('pendingUsers'));
    }

    public function verifyUser(Request $request, User $user)
    {
        $request->validate([
            'status' => 'required|in:aktif,ditolak',
        ]);

        $user->status = $request->status;
        $user->save();

        return redirect()->back()->with('status', 'User status updated successfully!');
    }
}
