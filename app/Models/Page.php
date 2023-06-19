<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
        'meta_title',
        'meta_description',
        'body',
    ];

    public $translatable = [
        'title',
        'meta_title',
        'meta_description',
        'body',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class, 'id_language');
    }
}