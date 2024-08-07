<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar; // Pastikan nama model sesuai dengan yang digunakan
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index() 
    {
        $pendaftar = Pendaftar::all();
        return view('pendaftaran.index', compact('pendaftar'));
    }

    public function create()
    {
        return view('pendaftaran.create'); // Menampilkan formulir pendaftaran
    }

    
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'program_studi' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'nomor_nik' => 'nullable|unique:pendaftar,nomor_nik',
            'nomor_hp' => 'required',
            'email' => 'required|email|unique:pendaftar,email',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'asal_sekolah' => 'nullable',
            'status_pendaftaran' => 'nullable',
        ]);
        
        $data = $request->all();

        if ($request->hasFile('foto_profile')) {
            $file = $request->file('foto_profile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foto_profiles', $filename);
            $data['foto_profile'] = $filename;
        }
        // Simpan data pendaftar ke database
        Pendaftar::create($validatedData);

        // $pendaftar->sendEmailVerificationNotification();

        // Redirect ke halaman pendaftaran dengan pesan sukses
        return redirect()->route('notification')->with('success', 'Pendaftar berhasil ditambahkan.');

        // PendaftarController::create($request->except(['_token']));
        // return redirect('/pendaftaran');
    }
        
        public function show($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        return view('pendaftaran.detail', compact('pendaftar'));
    }

    public function updateStatus(Request $request,string $id)
    {
        $pendaftar = Pendaftar::find($id);
        // $status = $request->input('status');

        $pendaftar->status_pendaftaran = $request->updateStatus;
        $pendaftar->save();
        return redirect()->back();
    }
    

    // public function verify($id)
    // {
    //     $pendaftar = Pendaftar::find($id);
        
    //     if ($pendaftar) {
    //         $pendaftar->status = 'verified'; // Atur status menjadi 'verified' atau sesuai logika Anda
    //         $pendaftar->save();

    //         return redirect()->route('admin.index')->with('success', 'Akun berhasil diverifikasi.');
    //     }

    //     return redirect()->route('admin.index')->with('error', 'Pendaftar tidak ditemukan.');
    // }


}
