<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Program extends Model
{
    use HasFactory;
    protected $table    = 'programs';
    protected $fillable = [
        'judul',
        'slug',
        'tanggal_kegiatan',
        'lokasi',
        'status',
        'gambar',
    ];
    // Otomatis isi slug saat membuat program
    protected static function booted()
    {
        static::creating(function ($program) {
            $program->slug = Str::slug($program->judul);
        });

        static::updating(function ($program) {
            $program->slug = Str::slug($program->judul);
        });
    }

    // Supaya route model binding pakai slug, bukan id
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function programsection()
    {
        return $this->hasMany(ProgramSection::class)->orderBy('created_at', 'asc');
    }

    public function latarBelakang()
    {
        return $this->hasOne(ProgramSection::class, 'program_id')
            ->where('judul_section', 'Latar Belakang');
    }
}
