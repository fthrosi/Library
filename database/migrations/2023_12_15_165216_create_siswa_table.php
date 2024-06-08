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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_telp')->nullable();
            $table->string('email')->unique(); // Fix: Change 'timestamp' to 'string'
            $table->string('password');
            $table->string('alamat');
            $table->text('foto')->nullable();
            $table->string('verify_key');
            $table->integer('active')->nullable();
            $table->float('denda')->nullable();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
