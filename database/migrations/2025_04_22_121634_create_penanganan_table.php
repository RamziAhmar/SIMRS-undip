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
        Schema::create('penanganans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pendaftaran');
            $table->integer('id_user');
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
        Schema::dropIfExists('penanganans');
    }
};
