<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleryKategori extends Model
{
    use HasFactory;
    protected $table = 'galery_kategoris';
    protected $fillable = [
        'nama',
        'is_active',
    ];

    public function galery()
    {
        return $this->hasMany(Galery::class, 'kategori_galery_id');
    }
}
