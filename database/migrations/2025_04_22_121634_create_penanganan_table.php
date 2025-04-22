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
        Schema::create('penanganan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penanganan');
            $table->integer('id_user');
            $table->datetime('waktu_penaganan');
            $table->text('keterangan');
            $table->text('tindakan');
            $table->string('resep_obat');
            $table->datetime('waktu_tindak_lanjut');
            $table->text('keterangan_tindak_lanjut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penanganan');
    }
};
