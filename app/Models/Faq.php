<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';
     protected $fillable = [
        'kategori_faq_id',
        'question',
        'answer',
        'is_active'
    ];
    public function kategoriFaq()
    {
        return $this->belongsTo(KategoriFAQ::class, 'kategori_faq_id');
    }
}
