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

        DB::statement("CREATE TYPE status_pm_enum AS ENUM ('restru', 'buyback', 'meninggal')");

        Schema::create('status_penerima_manfaats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE status_penerima_manfaats ADD COLUMN status_pm status_pm_enum");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_penerima_manfaats');

        DB::statement("DROP TYPE IF EXISTS status_pm_enum");
    }
};
