<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_tes extends Model
{
    use HasFactory;

    protected $table = 'jenis_tes';

    protected $fillable = [
            'tes_wawancara',
            'tes_tulis',
            'tes_mengaji',
    ];

    public function penilaian()
    {
        return $this->hasOne(penilaian::class, 'foreign_key');
    }
}
