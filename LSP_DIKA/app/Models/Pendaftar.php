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

    protected $table = 'pendaftar';

    protected $fillable = [
        'program_studi',
        'nama_depan',
        'nama_belakang',
        'nomor_nik', 
        'nomor_hp',
        'email',
        'tanggal_lahir', 
        'jenis_kelamin',
        'alamat',
        'foto_profile', 
        'asal_sekolah', 
        'status_pendaftaran', 
    ];

    
    protected $casts = [
        'program_studi' => 'string',
        'jenis_kelamin' => 'string',
        'alamat' => 'string',
        'tanggal_lahir' => 'date',

    ];

    
    protected $hidden = [];

    
    // protected $dates = ['email_verified_at'];
}
