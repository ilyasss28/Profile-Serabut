<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileImage extends Model
{
    protected $table = 'profile_images';

    protected $fillable = [
        'profile_id',
        'gambar',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
