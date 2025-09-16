<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    use HasFactory;
    protected $table = 'statistiks';
    protected $fillable = [
        'jumlah_desa',
        'jumlah_masyarakat',
        'jumlah_komoditas',
    ];
}
