<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    private $model = null;
    private $languages = null;

    public function __construct()
    {
        $this->model = new Page();
        $this->languages = config('localized-routes.supported_locales');
    }

    public function index()
    {
        $pages = Page::all();

        return view('admin.pages.index', compact('pages'));
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);

        $languages = $this->languages;

        return view('admin.pages.create', compact('page', 'languages'));
    }

    public function create()
    {
        $languages = $this->languages;

        return view('admin.pages.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $params = collect($request->all());
        $languages = config('localized-routes.supported_locales');

        $translatable = $this->model->translatable;

        if ($request->has('id')) {
            $page = Page::find($request->id);
        } else {
            $page = new Page();
        }

        foreach ($languages as $locale) {

            foreach ($translatable as $field) {
                $page->setTranslation($field, $locale, Arr::get($params, $field . '.' . $locale), '');
            }
        }

        $page->save();

        return redirect()->route('pages.edit', $page->id);
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);

        $page->delete();

        return redirect()->route('pages.index');
    }

    public function show($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.pages.show', compact('page'));
    }
}