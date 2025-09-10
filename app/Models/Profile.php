<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'judul',
        'sub_judul',
        'deskripsi',
    ];
    public function images()
    {
        return $this->hasMany(ProfileImage::class);
    }
}
