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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->nullable(); // Optional
            $table->foreignId('kelas_id')->constrained()->onDelete('cascade');
            $table->foreignId('jenjang_pendidikan_id')->constrained()->onDelete('cascade');
            $table->enum('status_kepegawaian', ['Tetap', 'Kontrak', 'Honorer']);
            $table->decimal('gaji', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
