<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProgram extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
