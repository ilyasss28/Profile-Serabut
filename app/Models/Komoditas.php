<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Komoditas extends Model
{
    use HasFactory;
    protected $table    = 'komoditas';
    protected $fillable = [
        'nama',
        'slug',
        'gambar',
        'deskripsi',
    ];
    protected static function booted()
    {
        static::saving(function ($komoditas) {
            // jika nama tidak ada, skip
            if (! $komoditas->nama) {
                return;
            }

            // Generate slug jika kosong atau nama berubah
            if (empty($komoditas->slug) || $komoditas->isDirty('nama')) {
                $base = Str::slug($komoditas->nama);
                $slug = $base;
                $i    = 1;

                // cek ketersediaan slug, kecualikan model saat ini bila update
                while (static::where('slug', $slug)
                    ->when($komoditas->exists, fn($q) => $q->where('id', '!=', $komoditas->id))
                    ->exists()) {
                    $slug = $base . '-' . $i++;
                }

                $komoditas->slug = $slug;
            }
        });
    }
}
