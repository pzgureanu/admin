<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Category extends Model
{
    use HasTranslations;
    
    public $translatable = [
        'title',
        'meta_title',
        'meta_description',
        'body',
    ];
}
