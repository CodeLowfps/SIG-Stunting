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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('kecamatan');
            $table->integer('jumlah_kasus');
            $table->integer('balita_idl');
            $table->integer('asi_eksklusif');
            $table->integer('balita_gizi_kurang');
            $table->integer('akses_sanitasi_layak');
            $table->integer('vit_a');
            $table->text('info');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas');
    }
};
