<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas'); // Contoh: X RPL 1
            $table->string('tingkat'); // X / XI / XII
            $table->string('paket_keahlian')->nullable(); // Contoh: RPL, TKJ, TBSM
            $table->string('rombel')->nullable(); // Contoh: A, B, C
            $table->unsignedBigInteger('id_wali')->nullable(); // relasi ke tabel guru
            $table->timestamps();

            $table->foreign('id_wali')->references('id')->on('gurus')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
