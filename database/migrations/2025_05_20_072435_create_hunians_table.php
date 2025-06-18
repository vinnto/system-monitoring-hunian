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
        Schema::create('hunians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lokasi_id');
            $table->unsignedBigInteger('tower_id');
            $table->unsignedBigInteger('lantai_id');
            $table->unsignedBigInteger('no_unit_id');
            $table->unsignedBigInteger('luas_tipe_id');
            $table->foreign('lokasi_id')->references('id')->on('lokasis')->onDelete('cascade');
            $table->foreign('tower_id')->references('id')->on('towers')->onDelete('cascade');
            $table->foreign('lantai_id')->references('id')->on('lantais')->onDelete('cascade');
            $table->foreign('no_unit_id')->references('id')->on('no_units')->onDelete('cascade');
            $table->foreign('luas_tipe_id')->references('id')->on('luas_tipes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hunians');
    }
};
