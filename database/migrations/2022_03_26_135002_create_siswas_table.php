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
            $table->string('pembayaran', 25)->nullable(); //stts pembayaran
            $table->string('transaction_id' ,45)->nullable();
            $table->string('order_id' ,5)->nullable();

            $table->id();
            $table->foreignId('user_id')->constrained(); //foreign key user id. User-Siswa
            $table->string('tahun_ajaran', 10)->nullable();
            $table->integer('nisn')->nullable();
            $table->string('nik_peserta', 16)->nullable();
            $table->string('nama_peserta', 45)->nullable();
            $table->string('jenis_kelamin', 12)->nullable();
            $table->string('tempat_lahir', 15)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('asal_sekolah', 20)->nullable();
            $table->text('alamat_peserta')->nullable();
            $table->string('nama_ayah' ,10)->nullable();
            $table->string('nama_ibu',10)->nullable();
            $table->string('nik_ayah' ,16)->nullable();
            $table->string('nik_ibu' ,16)->nullable();
            $table->string('pekerjaan_ayah', 10)->nullable();
            $table->string('pekerjaan_ibu', 10)->nullable();
            $table->text('alamat_orangtua')->nullable();
            $table->string('noHp_orangtua' ,12)->nullable();
            $table->text('status_pendaftaran', 25)->default('Berkas Belum Terverifikasi')->nullable();
            $table->string('pasphoto' ,45)->nullable();
            $table->string('akta_peserta', 45)->nullable();
            $table->string('ktp_orangtua', 45)->nullable();
            $table->string('kartu_keluarga', 45)->nullable();
            $table->string('raport', 80)->nullable();
            $table->string('sertifikat_prestasi', 45)->nullable();
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
