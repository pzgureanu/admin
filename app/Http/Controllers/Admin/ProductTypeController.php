<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductTypeController extends Controller
{
    private $model = null;
    private $languages = null;

    public function __construct()
    {
        $this->model = new ProductType();
        $this->languages = config('localized-routes.supported_locales');
    }

    public function index()
    {
        $productTypes = ProductType::all();

        return view('admin.product_types.index', compact('productTypes'));
    }

    public function edit($id)
    {
        $productType = ProductType::findOrFail($id);

        $languages = $this->languages;

        return view('admin.product_types.edit', compact('productType', 'languages'));
    }

    public function create()
    {
        $languages = $this->languages;

        return view('admin.product_types.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $params = collect($request->all());
        $languages = config('localized-routes.supported_locales');

        $translatable = $this->model->translatable;

        if ($request->has('id')) {
            $productType = ProductType::find($request->id);
        } else {
            $productType = new ProductType();
        }

        foreach ($languages as $locale) {
            foreach ($translatable as $field) {
                $productType->setTranslation($field, $locale, Arr::get($params, $field . '.' . $locale), '');
            }
        }

        $productType->save();

        return redirect()->route('product_types.index');
    }

    public function destroy($id)
    {
        $productType = ProductType::findOrFail($id);

        $productType->delete();

        return redirect()->route('product_types.index');
    }

}