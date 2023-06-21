<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PropertyController extends Controller
{
    private $model = null;
    private $languages = null;

    public function __construct()
    {
        $this->model = new Property();
        $this->languages = config('localized-routes.supported_locales');
    }

    public function index()
    {
        $properties = Property::all();

        return view('admin.properties.index', compact('properties'));
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);

        $languages = $this->languages;

        return view('admin.properties.create', compact('property', 'languages'));
    }

    public function create()
    {
        $languages = $this->languages;

        return view('admin.properties.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $params = collect($request->all());
        $languages = config('localized-routes.supported_locales');

        $translatable = $this->model->translatable;

        if ($request->has('id')) {
            $property = Property::find($request->id);
        } else {
            $property = new Property();
        }

        foreach ($languages as $locale) {
            foreach ($translatable as $field) {
                $property->setTranslation($field, $locale, Arr::get($params, $field . '.' . $locale), '');
            }
        }


        $property->save();

        return redirect()->route('properties.edit', $property->id);
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        $property->delete();

        return redirect()->route('properties.index');
    }

    public function show($id)
    {
        $property = Property::findOrFail($id);

        return view('admin.properties.show', compact('property'));
    }
}