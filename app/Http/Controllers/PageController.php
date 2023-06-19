<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Language;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        $languages = Language::all();
        return view('pages.create', compact('languages'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'body' => 'required',
            'language' => 'required', // Valoarea pentru id_language
        ]);

        $page = new Page([
            'title' => $validatedData['title'],
            'meta_title' => $validatedData['meta_title'],
            'meta_description' => $validatedData['meta_description'],
            'body' => $validatedData['body'],
        ]);

        $language = Language::findOrFail($validatedData['language']);
        $page->language()->associate($language);

        $page->save();

        return redirect()->route('pages.index')->with('success', 'Pagina a fost creată cu succes.');
    }


    public function show(Page $page)
    {
        $language = $page->language;

        return view('pages.show', compact('page', 'language'));
    }

    public function edit(Page $page)
    {
        $languages = Language::all();
        return view('pages.edit', compact('page', 'languages'));
    }

    public function update(Request $request, Page $page)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'body' => 'required',
            'language' => 'required', // Valoarea pentru id_language
        ]);

        $page->title = $validatedData['title'];
        $page->meta_title = $validatedData['meta_title'];
        $page->meta_description = $validatedData['meta_description'];
        $page->body = $validatedData['body'];

        $language = Language::findOrFail($validatedData['language']);
        $page->language()->associate($language);

        $page->save();

        return redirect()->route('pages.index')->with('success', 'Pagina a fost actualizată cu succes.');
    }


    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Pagina a fost ștearsă cu succes.');
    }
}