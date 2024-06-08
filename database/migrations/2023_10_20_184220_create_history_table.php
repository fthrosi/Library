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
        Schema::create('history', function (Blueprint $table) {
            $table->id('id_history');
            $table->bigInteger('id_siswa')->foreign('id_siswa')->references('id')->on('users');
            $table->bigInteger('id_buku')->foreign('id_buku')->references('id_buku')->on('buku');
            $table->date('tanggal_pinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pinjam');
    }
};
