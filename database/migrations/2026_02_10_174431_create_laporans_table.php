<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_id')->unique(); // Contoh: S13/PPKPT/UNSRI/2026/001
            $table->string('judul'); // "Dugaan Kekerasan di..."
            $table->enum('kategori', ['Kekerasan Fisik', 'Kekerasan Verbal', 'Kekerasan Seksual', 'Cyber Bullying']);
            $table->text('deskripsi');
            $table->string('lokasi_makro'); // "Fakultas Ilmu Komputer" (Sesuai SRS)
            $table->string('status')->default('Verifikasi'); // Verifikasi, Pemeriksaan, Selesai
            $table->boolean('is_anonim')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
