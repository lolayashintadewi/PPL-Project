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
        Schema::create('surat', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nomor_surat', 50); // Nomor surat
            $table->enum('jenis_surat', ['masuk', 'keluar']); // Jenis surat: masuk atau keluar
            $table->string('pengirim', 100); // Pengirim surat
            $table->string('penerima', 100); // Penerima surat
            $table->date('tanggal_surat'); // Tanggal surat dibuat
            $table->date('tanggal_terima')->nullable(); // Tanggal diterima (untuk surat masuk)
            $table->text('perihal'); // Perihal atau subjek surat
            $table->string('lampiran')->nullable(); // Lampiran, jika ada
            $table->enum('status', ['diproses', 'selesai', 'ditolak']); // Status surat
            $table->timestamps(); // Timestamps for created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
