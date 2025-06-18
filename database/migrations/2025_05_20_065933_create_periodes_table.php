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
        DB::statement("CREATE TYPE semester_enum AS ENUM ('ganjil', 'genap')");

        Schema::create('periodes', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE periodes ADD COLUMN semester semester_enum");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodes');

        DB::statement("DROP TYPE IF EXISTS semester_enum");
    }
};
