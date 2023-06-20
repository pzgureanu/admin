<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    private $model = null;
    private $languages = null;

    public function __construct()
    {
        $this->model = new Category();
        $this->languages = config('localized-routes.supported_locales');
    }
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        $languages = $this->languages;

        return view('admin.categories.create', compact('category', 'languages'));
    }

    public function create()
    {
        $languages = $this->languages;

        return view('admin.categories.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $params = collect($request->all());
        $languages = config('localized-routes.supported_locales');

        $translatable = $this->model->translatable;

        if ($request->has('id')) {
            $category =Category::find($request->id);
        } else {
            $category = new Category();
        }

        foreach ($languages as $locale) {

            foreach ($translatable as $field) {
                $category->setTranslation($field, $locale, Arr::get($params, $field.'.'. $locale), '');
            }
        }

        $category->active = $request->boolean('active');

        $category->save();

        return redirect()->route('categories.edit', $category->id);
    }
}
