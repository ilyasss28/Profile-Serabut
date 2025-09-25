<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Publikasi extends Model
{
    use HasFactory;
    protected $table = 'publikasis';
    protected $fillable = [
        'kategori_publikasi_id',
        'judul',
        'deskripsi',
        'gambar',
        'tanggal_terbit',
        'file_url',
    ];
    public function kategoriPublikasi()
{
    return $this->belongsTo(KategoriPublikasi::class, 'kategori_publikasi_id');
}

}
