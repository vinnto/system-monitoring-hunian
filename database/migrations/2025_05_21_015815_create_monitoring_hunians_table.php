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

        DB::statement("DROP TYPE IF EXISTS jenis_monitoring_enum");
        DB::statement("DROP TYPE IF EXISTS jenis_kendaraan_enum");
        DB::statement("CREATE TYPE jenis_monitoring_enum AS ENUM('mandiri', 'surveyor', 'belum')");
        DB::statement("CREATE TYPE jenis_kendaraan_enum AS ENUM('roda2, roda4')");

        Schema::create('monitoring_hunians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_responden');
            $table->string('nik_responden');
            $table->string('foto_ktp_responden');
            $table->string('hubungan_responden');
            $table->string('hubungan_penghuni');
            $table->string('jumlah_penghuni');
            $table->string('nama_penghuni');
            $table->string('nik_penghuni');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('foto_geotag');
            $table->string('lokasi_geotag');
            $table->string('no_plat');
            $table->string('foto_depan_unit');
            $table->string('foto_meteran_air');
            $table->string('nilai_ocr_air');
            $table->string('nilai_meteran_air');
            $table->date('tgl_upload_meteran_air');
            $table->string('foto_meteran_listrik');
            $table->string('nilai_ocr_listrik');
            $table->string('nilai_meteran_listrik');
            $table->date('tgl_upload_meteran_listrik');
            $table->string('foto_surveyor');
            $table->enum('pertanyaan', ['iya', 'tidak']);
            $table->enum('pernyataan', ['sudah', 'belum']);
            $table->string('nama_surveyor');
            $table->string('foto_pengelola');
            $table->unsignedBigInteger('pm_id');
            $table->unsignedBigInteger('periode_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('pm_id')->references('id')->on('penerima_manfaats')->onDelete('cascade');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("ALTER TABLE monitoring_hunians ADD COLUMN jenis_monitoring jenis_monitoring_enum");
        DB::statement("ALTER TABLE monitoring_hunians ADD COLUMN jenis_kedaraan jenis_kendaraan_enum");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring_hunians');

        DB::statement("DROP TYPE IF EXISTS jenis_monitoring_enum");
        DB::statement("DROP TYPE IF EXISTS jenis_kendaraan_enum");
    }
};
