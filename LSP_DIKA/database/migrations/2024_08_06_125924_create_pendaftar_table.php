<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->enum('program_studi', ['Akuntansi', 'Manajemen', 'Informatika', 'Sistem Informasi']);
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('nomor_nik')->unique()->nullable();
            $table->string('nomor_hp');
            $table->string('email', 255)->unique();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->text('alamat');
            $table->string('foto_profile')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->enum('status_pendaftaran', ['Diterima', 'Ditolak', 'Dalam Proses'])->default('Dalam Proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftar');
    }
};
