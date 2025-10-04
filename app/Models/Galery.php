<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table    = 'galeries';
    protected $fillable = [
        'kategori_galery_id',
        'gambar',
    ];
    
    public function kategoriGalery()
    {
        return $this->belongsTo(GaleryKategori::class, 'kategori_galery_id');
    }
}
