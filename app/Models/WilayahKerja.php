<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WilayahKerja extends Model
{
    use HasFactory;
    protected $table = 'wilayah_kerjas';
    protected $fillable = [
        'nama_desa',
        'jumlah_petani',
        'tahun_berdiri',
        'url_maps',
    ];
}
