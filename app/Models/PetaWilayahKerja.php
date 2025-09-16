<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetaWilayahKerja extends Model
{
    use HasFactory;
    protected $table = 'peta_wilayah_kerjas';
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar_peta',
    ];
}
