<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media; // Import this

class Product extends Model implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

    protected $fillable = ['title', 'meta_title', 'meta_description', 'active', 'is_new', 'is_brand', 'body', 'product_type'];

    public $translatable = ['title', 'meta_title', 'meta_description', 'body'];

    public function productType()
    {
        return $this->belongsTo(\App\Models\ProductType::class, 'product_type_id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100);
    }

    public function properties()
    {
        return $this->hasMany(ProductProperty::class);
    }
}
