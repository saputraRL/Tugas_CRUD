<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nama_mk', 'dosen', 'jumlah_soal', 'keterangan'
    ];
}
