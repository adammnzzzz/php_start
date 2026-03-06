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
        Schema::create('persertas', function (Blueprint $table) {
            $table->id();

            // Gunakan underscore (_) sebagai pengganti spasi
            $table->integer('jurusan_id');
            $table->integer('gelombang_id');
            $table->string('nama_lengkap');
            $table->string('nik', 16); // NIK biasanya 16 digit
            $table->string('no_kk', 16);
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pendidikan_terakhir');
            $table->string('nama_sekolah');
            $table->string('kejuruan');
            $table->string('no_hp', 20);
            $table->string('email')->unique(); // Tambahkan unique agar email tidak ganda
            $table->string('aktivitas_saat_ini');
            $table->tinyInteger('status')->default(0); // Memberikan nilai awal 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persertas');
    }
};
