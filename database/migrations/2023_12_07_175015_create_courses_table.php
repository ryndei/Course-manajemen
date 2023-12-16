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
        Schema::create('Courses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->string('pengajar');
            $table->string('ruang');
            $table->string('Hari');
            $table->time('Jam');
            $table->string('harga');
            $table->string('jumlah_pertemuan');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
