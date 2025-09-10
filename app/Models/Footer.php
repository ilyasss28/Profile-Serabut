<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footers';

    protected $fillable = [
        'nomor_telepon',
        'email',
        'alamat',
        'jam_kerja',
    ];
}
