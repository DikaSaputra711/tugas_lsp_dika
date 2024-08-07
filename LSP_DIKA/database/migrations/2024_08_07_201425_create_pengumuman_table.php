<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->string('judul'); // Kolom untuk judul pengumuman
            $table->text('keterangan'); // Kolom untuk keterangan pengumuman
            $table->date('tanggal'); // Kolom untuk tanggal pengumuman
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman');
    }
};
