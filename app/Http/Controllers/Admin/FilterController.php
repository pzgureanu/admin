<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FilterController extends Controller
{
    private $model = null;
    private $languages = null;

    public function __construct()
    {
        $this->model = new Filter();
        $this->languages = config('localized-routes.supported_locales');
    }

    public function index()
    {
        $filters = Filter::all();

        return view('admin.filters.index', compact('filters'));
    }

    public function edit($id)
    {
        $filter = Filter::findOrFail($id);

        $languages = $this->languages;

        return view('admin.filters.create', compact('filter', 'languages'));
    }

    public function create()
    {
        $languages = $this->languages;

        return view('admin.filters.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $params = collect($request->all());
        $languages = config('localized-routes.supported_locales');

        $translatable = $this->model->translatable;

        if ($request->has('id')) {
            $filter = Filter::find($request->id);
        } else {
            $filter = new Filter();
        }

        foreach ($languages as $locale) {
            foreach ($translatable as $field) {
                $filter->setTranslation($field, $locale, Arr::get($params, $field . '.' . $locale), '');
            }
        }

        $filter->options = $request->get('options', []);

        // Convertim valoarea 'on' la 1 și orice altă valoare la 0
        $filter->active = $request->get('active') == 'on' ? 1 : 0;

        $filter->save();

        return redirect()->route('filters.edit', $filter->id);
    }


    public function destroy($id)
    {
        $filter = Filter::findOrFail($id);

        $filter->delete();

        return redirect()->route('filters.index');
    }

    public function show($id)
    {
        $filter = Filter::findOrFail($id);

        return view('admin.filters.show', compact('filter'));
    }
}