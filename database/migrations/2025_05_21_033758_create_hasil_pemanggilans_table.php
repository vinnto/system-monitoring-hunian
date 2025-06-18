<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE TYPE intensitas_menghuni_enum AS ENUM('aktif', 'berkala', 'pelanggaran')");

        Schema::create('hasil_pemanggilans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_kehadiran');
            $table->unsignedBigInteger('periode_id');
            $table->unsignedBigInteger('pm_id');
            $table->unsignedBigInteger('pemanggilan_id');
            $table->unsignedBigInteger('keterangan_id');
            $table->unsignedBigInteger('tempat_tinggal_id');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->foreign('pm_id')->references('id')->on('penerima_manfaats')->onDelete('cascade');
            $table->foreign('pemanggilan_id')->references('id')->on('pemanggilans')->onDelete('cascade');
            $table->foreign('keterangan_id')->references('id')->on('keterangans')->onDelete('cascade');
            $table->foreign('tempat_tinggal_id')->references('id')->on('tempat_tinggals')->onDelete('cascade');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE hasil_pemanggilans ADD COLUMN intensitas_menghuni intensitas_menghuni_enum");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_pemanggilans');

        DB::statement("DROP TYPE IF EXISTS intensitas_menghuni_enum");
    }
};
