<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'gambar',
        'deskripsi',
    ];
    public function kategoriProgram()
{
    return $this->belongsTo(KategoriProgram::class, 'kategori');
}
}
