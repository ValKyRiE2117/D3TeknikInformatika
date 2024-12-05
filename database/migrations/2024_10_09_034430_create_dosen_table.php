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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_dosen'); // Name of the lecturer
            $table->string('npp')->unique(); // Lecturer's NPP (unique identifier)
            $table->string('email_dosen'); // Phone number of the lecturer
            $table->string('password_dosen'); // Phone number of the lecturer
            $table->enum('role', ['kaprodi', 'dosen'])->default('dosen');
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
