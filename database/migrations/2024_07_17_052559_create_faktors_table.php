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
        Schema::create('faktors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faktor_id');
            $table->foreign('faktor_id')->references('id')->on('datas')->onDelete;
            $table->string('faktor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faktors');
    }
};
