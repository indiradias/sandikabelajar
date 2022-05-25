<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->char('nisn');
            $table->text('nik_peserta');
            $table->text('nama_peserta');
            $table->text('jenis_kelamin');
            $table->text('tempat_lahir');
            $table->text('tanggal_lahir');
            $table->text('asal_sekolah');
            $table->text('alamat_peserta');
            $table->text('nama_ayah');
            $table->text('nama_ibu');
            $table->text('nik_ayah');
            $table->text('nik_ibu');
            $table->text('pekerjaan_ayah');
            $table->text('pekerjaan_ibu');
            $table->text('alamat_orangtua');
            $table->text('noHp_orangtua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};
