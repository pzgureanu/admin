<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductProperty;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\ProductType;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductController extends Controller
{
    private $model = null;
    private $languages = null;

    public function __construct()
    {
        $this->model = new Product();
        $this->languages = config('localized-routes.supported_locales');
    }

    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $languages = $this->languages;
        $productTypes = ProductType::all();
        $properties = Property::all();

        return view('admin.products.create', compact('properties', 'product', 'languages', 'productTypes'));
    }
    public function create()
    {
        $languages = $this->languages;
        $productTypes = ProductType::all();
        $properties = Property::all();
        $product = new Product(); // Add this line

        return view('admin.products.create', compact('properties', 'languages', 'productTypes', 'product')); // Include 'product' here
    }


    public function store(Request $request)
    {
        $params = collect($request->all());
        $languages = config('localized-routes.supported_locales');

        $translatable = $this->model->translatable;

        $product = null;

        if ($request->has('id')) {
            $product = Product::find($request->id);
        }

        if ($product === null) {
            $product = new Product();
        }

        foreach ($languages as $locale) {
            foreach ($translatable as $field) {
                $product->setTranslation($field, $locale, Arr::get($params, $field . '.' . $locale), '');
            }
        }

        $product->active = $request->has('active') ? true : false;
        $product->is_new = $request->has('is_new') ? true : false;
        $product->is_brand = $request->has('is_brand') ? true : false;
        $product->slug = Str::slug($request->input('slug'));
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');

        // Adauga acesta linie de cod pentru a salva product_type_id
        $product->product_type_id = $request->input('product_type_id');

        $product->save();

        if ($request->hasFile('imagine')) {
            $product->clearMediaCollection('main');
            $product->addMediaFromRequest('imagine')->toMediaCollection('main');
        }


        if ($images = $request->file('images')) {
            foreach ($images as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        }

        if ($request->has('properties')) {
            if ($product->properties) {
                $product->properties()->delete();
            }

            $properties = $request->get('properties', []);

            foreach ($properties as $key => $property) {
                $productProperty = new ProductProperty();
                $productProperty->product_id = $product->id;
                $productProperty->property_id = $key;
                foreach ($languages as $locale) {
                    $value = Arr::get($properties, $key . '.' . $locale);
                    if (empty($value)) {
                        continue;
                    }
                    $productProperty->setTranslation('value', $locale, $value);
                }
                $productProperty->save();
            }
        }

        return redirect()->route('products.index', $product->id);
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));
    }

    public function productDeleteImage(Request $request)
    {
        Media::find($request->id)->delete();

        return json_encode([
            'deleted' => 1
        ]);
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('laptop', compact('product'));
    }
}