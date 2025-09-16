<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPublikasi extends Model
{
    use HasFactory;
    protected $table = 'kategori_publikasis';
    protected $fillable = [
        'nama',
        'is_active',
    ];
    public function publikasis()
{
    return $this->hasMany(Publikasi::class, 'kategori_publikasi_id');
}
}
