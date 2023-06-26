<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\ProductType;
use Illuminate\Support\Str;

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

        return view('admin.products.create', compact('product', 'languages', 'productTypes'));
    }

    public function create()
    {
        $languages = $this->languages;
        $productTypes = ProductType::all();

        return view('admin.products.create', compact('languages', 'productTypes'));
    }

    public function store(Request $request)
    {
        $params = collect($request->all());
        $languages = config('localized-routes.supported_locales');

        $translatable = $this->model->translatable;

        if ($request->has('id')) {
            $product = Product::find($request->id);
        } else {
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

        // Adauga acesta linie de cod pentru a salva product_type_id
        $product->product_type_id = $request->input('product_type_id');

        $product->save();

        if ($request->hasFile('imagine')) {
            $product->clearMediaCollection('images');
            $product->addMediaFromRequest('imagine')->toMediaCollection('images');
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

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('directory_name.laptop', compact('product'));
    }
}