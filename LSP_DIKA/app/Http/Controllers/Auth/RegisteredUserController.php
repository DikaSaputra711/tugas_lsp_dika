<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'nama_depan' => ['required', 'string', 'max:255'],
        //     'nama_belakang' => ['required', 'string', 'max:255'],
        //     'nomor_hp' => ['required', 'string', 'max:15'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'bukti_pembayaran' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'], // max file size 2MB
        //     'role' => ['required', 'in:calon_mahasiswa,admin'],
        // ]);

        $bukti_pembayaranPath = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            if ($file->isValid()) {
                $bukti_pembayaranPath = $file->store('bukti_pembayaran', 'public');
            } else {
                return back()->withErrors(['bukti_pembayaran' => 'Invalid file upload.']);
            }
        } else {
            return back()->withErrors(['bukti_pembayaran' => 'No file uploaded.']);
        }
    
        $user = User::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'bukti_pembayaran' => $bukti_pembayaranPath,
            'role' => 'calon_mahasiswa',
            'status' => 'pending',
        ]);

        event(new Registered($user));

        // Auth::login($user);

    // Arahkan pengguna ke halaman login jika pendaftaran berhasil
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    /**
     * Verify the user and update their status.
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verifyUser(Request $request, User $user): RedirectResponse
    {
        $this->authorize('update', $user); // Ensure only admin can do this

        $request->validate([
            'status' => 'required|in:pending,aktif,ditolak',
        ]);

        $user->status = $request->status;
        $user->save();

        return redirect()->back()->with('status', 'User status updated successfully!');
    }
}
