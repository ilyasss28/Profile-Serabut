<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Publikasi extends Model
{
    use HasFactory;
    protected $table    = 'publikasis';
    protected $fillable = [
        'kategori_publikasi_id',
        'judul',
        'slug',
        'deskripsi',
        'gambar',
        'tanggal_terbit',
        'file_url',
    ];
    public function kategoriPublikasi()
    {
        return $this->belongsTo(KategoriPublikasi::class, 'kategori_publikasi_id');
    }

    protected static function booted()
    {
        static::saving(function ($publikasi) {
            if (! $publikasi->judul) {
                return;
            }

            // Generate slug jika kosong atau judul berubah
            if (empty($publikasi->slug) || $publikasi->isDirty('judul')) {
                $base = Str::slug($publikasi->judul);
                $slug = $base;
                $i    = 1;

                // Pastikan unik
                while (static::where('slug', $slug)
                    ->when($publikasi->exists, fn($q) => $q->where('id', '!=', $publikasi->id))
                    ->exists()) {
                    $slug = $base . '-' . $i++;
                }

                $publikasi->slug = $slug;
            }
        });
    }

}
