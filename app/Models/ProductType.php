<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProductType extends Model
{
    use HasTranslations;

    protected $fillable = ['title', 'meta_title', 'meta_description'];

    public $translatable = ['title', 'meta_title', 'meta_description'];

    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'product_type_id');
    }
}