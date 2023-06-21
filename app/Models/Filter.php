<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Filter extends Model
{
    use HasTranslations;

    protected $fillable = ['title', 'active', 'options'];
    public $translatable = ['title'];

    protected $casts = [
        'options' => 'array',
    ];
}