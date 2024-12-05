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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama_mhs');
            $table->string('slug_mhs')->nullable();

            // Foreign key for tahun_ajaran
            $table->foreignId('id_tahunajaran')
                ->nullable() // Make it nullable for onDelete('set null')
                ->constrained('tahun_ajaran')
                ->onDelete('set null'); // Handle deletion of related tahun_ajaran
            // Enum for status
            $table->enum('status', ['aktif', 'lulus', 'tidak aktif', 'keluar']);
            // Foreign key for dosen_wali
            $table->unsignedBigInteger('dosen_wali')->nullable(); // Define dosen_wali column
            $table->foreign('dosen_wali')
                ->references('id')
                ->on('dosen')
                ->onDelete('set null'); // Handle deletion of related dosen

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};