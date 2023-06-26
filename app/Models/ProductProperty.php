<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductProperty extends Model
{
    use HasFactory;

    use HasTranslations;

    public $timestamps = null;

    public $translatable = ['value'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
