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
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->bigInteger('kode_buku');
            $table->string('nama_buku');
            $table->string('penerbit');
            $table->string('penulis');
            $table->text('sinopsis');
            $table->integer('rak');
            $table->integer('stok_buku');
            $table->text('foto_buku');
            $table->integer('jumlah_dipinjam')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
