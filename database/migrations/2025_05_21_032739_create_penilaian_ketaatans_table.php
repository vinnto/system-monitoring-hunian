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
        DB::statement("CREATE TYPE status_air_enum AS ENUM('normal', 'tidak_normal')");

        DB::statement("CREATE TYPE status_listrik_enum AS ENUM('normal', 'tidak_normal')");

        DB::statement("CREATE TYPE status_ketaatan_enum AS ENUM('taat', 'terindikasi', 'tidak_taat')");

        Schema::create('penilaian_ketaatans', function (Blueprint $table) {
            $table->id();
            $table->string('hasil_air');
            $table->string('hasil_listrik');
            $table->unsignedBigInteger('periode_id');
            $table->unsignedBigInteger('pm_id');
            $table->unsignedBigInteger('monitoring_id');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->foreign('pm_id')->references('id')->on('penerima_manfaats')->onDelete('cascade');
            $table->foreign('monitoring_id')->references('id')->on('monitoring_hunians')->onDelete('cascade');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE penilaian_ketaatans ADD COLUMN status_air status_air_enum");
        DB::statement("ALTER TABLE penilaian_ketaatans ADD COLUMN status_listrik status_listrik_enum");
        DB::statement("ALTER TABLE penilaian_ketaatans ADD COLUMN status_ketaatan status_ketaatan_enum");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_ketaatans');

        DB::statement("DROP TYPE IF EXISTS status_air_enum");

        DB::statement("DROP TYPE IF EXISTS status_listrik_enum");

        DB::statement("DROP TYPE IF EXISTS status_ketaatan_enum");
    }
};
