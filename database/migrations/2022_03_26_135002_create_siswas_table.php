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
            $table->string('pembayaran')->nullable(); //stts pembayaran
            $table->string('transaction_id')->nullable();
            $table->string('order_id')->nullable();

            $table->id();
            $table->foreignId('user_id')->constrained(); //foreign key user id. User-Siswa
            $table->text('tahun_ajaran')->nullable();
            $table->char('nisn')->nullable();
            $table->text('nik_peserta')->nullable();
            $table->text('nama_peserta')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('tempat_lahir')->nullable();
            $table->text('tanggal_lahir')->nullable();
            $table->text('asal_sekolah')->nullable();
            $table->text('alamat_peserta')->nullable();
            $table->text('nama_ayah')->nullable();
            $table->text('nama_ibu')->nullable();
            $table->text('nik_ayah')->nullable();
            $table->text('nik_ibu')->nullable();
            $table->text('pekerjaan_ayah')->nullable();
            $table->text('pekerjaan_ibu')->nullable();
            $table->text('alamat_orangtua')->nullable();
            $table->text('noHp_orangtua')->nullable();
            $table->string('status_pendaftaran')->default('Berkas Belum Terverifikasi')->nullable();
            $table->string('pasphoto')->nullable();
            $table->string('akta_peserta')->nullable();
            $table->string('ktp_orangtua')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('raport')->nullable();
            $table->string('sertifikat_prestasi')->nullable();
            $table->double('nilai_rata')->nullable();
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
