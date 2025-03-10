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
        Schema::create('bank_materis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mata_kuliah_id')->constrained()->cascadeOnDelete();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('kategori')->nullable();
            $table->unsignedInteger('total_soal')->default(0);
            $table->unsignedInteger('total_halaman')->default(0);
            $table->boolean('is_draft')->default(true);
            $table->unsignedInteger('tingkat_kesulitan')->default(1); // 1-5
            $table->string('penulis')->nullable();
            $table->date('tanggal_publikasi')->nullable();
            $table->timestamps();
        });

        Schema::create('bank_materi_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bank_materi_id')->constrained()->cascadeOnDelete();
            $table->string('nama_file');
            $table->string('file_path');
            $table->unsignedInteger('ukuran_file')->nullable(); // dalam KB
            $table->string('tipe_file')->default('pdf');
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_materis');
        Schema::dropIfExists('bank_materi_files');
    }
};
