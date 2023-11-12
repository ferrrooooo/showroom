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
        Schema::create('kendaraan_specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_tipe_kendaraan");
            $table->string("model");
            $table->integer("tahun")->nullable();
            $table->integer("jumlah_penumpang")->nullable();
            $table->integer("harga")->nullable();
            $table->string("jenis_bbm")->nullable();
            $table->integer("luas_bagasi_mobil")->nullable();
            $table->integer("luas_bagasi_motor")->nullable();
            $table->integer("kapasitas_bensin")->nullable();
            $table->integer("jumlah_roda")->nullable();
            $table->integer("luas_area_kargo")->nullable();
            $table->string("manufaktur")->nullable();
            $table->timestamp("deleted_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan_specs');
    }
};
