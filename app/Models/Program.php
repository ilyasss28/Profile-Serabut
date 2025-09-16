<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';
    protected $fillable = [
        'judul',
        'tanggal_kegiatan',
        'lokasi',
        'status',
        'gambar',
    ];
    public function programsection()
    {
        return $this->hasMany(ProgramSection::class, 'program_id');
    }

    public function latarBelakang()
    {
        return $this->hasOne(ProgramSection::class, 'program_id')
            ->where('judul_section', 'Latar Belakang');
    }
}
