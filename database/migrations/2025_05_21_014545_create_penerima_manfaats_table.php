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
        Schema::create('penerima_manfaats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pm');
            $table->string('nik_pm');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->string('alamat_pekerjaan');
            $table->string('no_kk');
            $table->string('foto_ktp');
            $table->string('foto_kk');
            $table->string('tgl_akad');
            $table->unsignedBigInteger('hunian_id');
            $table->unsignedBigInteger('status_pm_id');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->foreign('hunian_id')->references('id')->on('hunians')->onDelete('cascade');
            $table->foreign('status_pm_id')->references('id')->on('status_penerima_manfaats')->onDelete('cascade');
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_manfaats');
    }
};
