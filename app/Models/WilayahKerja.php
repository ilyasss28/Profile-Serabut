<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WilayahKerja extends Model
{
    protected $fillable = [
        'nama_desa',
        'jumlah_petani',
        'tahun_berdiri',
        'url_maps',
    ];
}
