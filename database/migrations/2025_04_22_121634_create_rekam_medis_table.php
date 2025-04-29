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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_petugas');
            $table->foreign('id_petugas')->references('id')->on('users');
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')->references('id')->on('pasiens');
            $table->datetime('waktu_pendaftaran');
            $table->text('keluhan');
            $table->enum('status', ['Mengantri', 'Berlangsung', 'Selesai']);
            $table->timestamps();
        });

        Schema::create('penanganans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pendaftaran');
            $table->foreign('id_pendaftaran')->references('id')->on('pendaftarans');
            $table->unsignedBigInteger('id_dokter');
            $table->foreign('id_dokter')->references('id')->on('users');
            $table->datetime('waktu_penaganan');
            $table->text('keterangan');
            $table->text('tindakan');
            $table->string('resep_obat')->nullable();
            $table->datetime('waktu_tindak_lanjut')->nullable();
            $table->text('keterangan_tindak_lanjut')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
        Schema::dropIfExists('penanganans');
    }
};
