<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftarans';
    protected $primaryKey = 'id';

    protected $fillable = [
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
    ];


}
