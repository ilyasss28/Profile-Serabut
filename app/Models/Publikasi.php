<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Publikasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori_publikasi_id',
        'file_url',
        'gambar',
    ];
    public function kategoriPublikasi()
{
    return $this->belongsTo(KategoriPublikasi::class, 'kategori_publikasi_id');
}

}
