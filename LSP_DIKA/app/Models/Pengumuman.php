<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang digunakan oleh model ini
    protected $table = 'pengumuman';

    // Tentukan kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'judul',
        'keterangan',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',

    ];

    // Jika Anda menggunakan timestamp, pastikan untuk mengatur $timestamps menjadi true
    public $timestamps = true; // Default, bisa dihilangkan jika tidak ingin menggunakan timestamps
}
