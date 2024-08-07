<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Pendaftar extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    // Nama tabel yang digunakan
    protected $table = 'pendaftar';

    // Menentukan kolom yang dapat diisi massal
    protected $fillable = [
        'program_studi',
        'nama_depan',
        'nama_belakang',
        'nomor_nik', // Kolom baru
        'nomor_hp',
        'email',
        'tanggal_lahir', // Kolom baru
        'jenis_kelamin',
        'alamat',
        'foto_profile', // Kolom baru
        'asal_sekolah', // Kolom baru
        'status_pendaftaran', // Kolom baru
    ];

    // Menentukan kolom yang harus diisi dengan tipe data tertentu
    protected $casts = [
        'program_studi' => 'string',
        'jenis_kelamin' => 'string',
        'alamat' => 'string',
        'tanggal_lahir' => 'date',

    ];

    // Menyembunyikan kolom dari array/JSON output
    protected $hidden = [];

    // // Menambahkan kolom untuk verifikasi email
    // protected $dates = ['email_verified_at'];
}
