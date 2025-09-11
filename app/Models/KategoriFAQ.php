<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriFAQ extends Model
{
    protected $table = 'kategori_faqs';
    protected $fillable = ['nama', 'is_active'];

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'kategori_faq_id');
    }
}
