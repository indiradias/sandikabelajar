<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'siswas';
    protected $primaryKey = 'nisn';
    protected $cast = ['nisn' => 'char'];

    protected $fillable = [
            // 'user_id',
            'pembayaran',
            'nisn',
            'nik_peserta',
            'nama_peserta',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'asal_sekolah',
            'alamat_peserta',
            'nama_ayah',
            'nama_ibu',
            'nik_ayah',
            'nik_ibu',
            'pekerjaan_ayah',
            'pekerjaan_ibu',
            'alamat_orangtua',
            'noHp_orangtua',
            'status_pendaftaran',
            'pasphoto',
            'akta_peserta',
            'ktp_orangtua',
            'kartu_keluarga',
            'raport',
            'sertifikat_prestasi',
    ];

    public $guarded = 'sertifikat_prestasi';

    public function showData($sisw)
    {
        return Siswa::table('siswas')->where('nisn', $sisw)->first();
    }

    //relasi untuk user id tampil stts verifikasi siswa
    // public function user(){
	// 	return $this->belongsTo(User::class);
	// }

    //query jumlah asal sekolah
    public function jumlah($jumlah){
        $results = DB::select('select * from siswas where id = :id', ['id' => 1]);
    }

    //relasi tabel penilaian
    public function getPenilaian() {
        return $this->hasMany('App\Models\penilaian', 'nisn', 'nisn');
    }

}
