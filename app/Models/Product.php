<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

    protected $fillable = ['title', 'meta_title', 'meta_description', 'active', 'is_new', 'is_brand', 'body', 'product_type']; // Include 'product_type' aici

    public $translatable = ['title', 'meta_title', 'meta_description', 'body'];

    public function productType()
    {
        return $this->belongsTo(\App\Models\ProductType::class, 'product_type_id');
    }
}