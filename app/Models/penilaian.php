<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// protected $guarded = ['id'];
class penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'jenis_tes_id',
        'nilai'
    ];
    public function getSiswa() {
        return $this->belongsTo('App\Models\Siswa', 'nisn', 'nisn');
    }
}

