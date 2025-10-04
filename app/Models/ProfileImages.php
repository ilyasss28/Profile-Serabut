<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileImages extends Model
{
    use HasFactory;
    protected $table = 'profile_images';
    protected $fillable = ['profile_id', 'image_path'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
