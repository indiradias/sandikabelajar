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
        Schema::create('siswas', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('penilaian_id'); //  foreign key ke table penilaian
            $table->string('pembayaran'); //stts pembayaran
            $table->string('transaction_id');
            $table->string('order_id');

            $table->id();
            $table->foreignId('user_id')->constrained(); //foreign key user id. User-Siswa
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
            $table->string('status_pendaftaran')->default('Belum Terverifikasi');
            $table->string('pasphoto');
            $table->string('akta_peserta');
            $table->string('ktp_orangtua');
            $table->string('kartu_keluarga');
            $table->string('raport');
            $table->string('sertifikat_prestasi')->nullable();
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
        Schema::dropIfExists('siswas');
    }
};
