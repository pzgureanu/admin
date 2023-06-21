<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Property extends Model
{
    use HasTranslations;

    protected $fillable = ['title'];
    public $translatable = ['title'];
}