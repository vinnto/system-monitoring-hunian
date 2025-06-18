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

        DB::statement("CREATE TYPE status_pemanggilan_enum AS ENUM('klarifikasi', 'teguran_1', 'teguran_2', 'teguran_3', 'sanksi')");

        Schema::create('pemanggilans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pemanggilan');
            $table->string('surat');
            $table->unsignedBigInteger('periode_id');
            $table->unsignedBigInteger('pm_id');
            $table->unsignedBigInteger('penilian_ketaatan_id');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->foreign('pm_id')->references('id')->on('penerima_manfaats')->onDelete('cascade');
            $table->foreign('penilian_ketaatan_id')->references('id')->on('penilaian_ketaatans')->onDelete('cascade');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE pemanggilans ADD COLUMN status_pemanggilan status_pemanggilan_enum");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemanggilans');

        DB::statement("DROP TYPE IF EXISTS status_pemanggilan_enum");
    }
};
