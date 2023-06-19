<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use App\Models\Language;

class LangController extends Controller
{
    public function index()
    {
        return view('admin.langs');
    }

    public function store(Request $request)
    {
        // Validează și salvează noua limbă în baza de date
        // Exemplu de cod:
        $language = new Language();
        $language->name = $request->input('language');
        $language->save();

        // Redirecționează înapoi la pagina de limbă
        return redirect()->route('langs.index');
    }

    public function destroy($id)
    {
        // Găsește și șterge limba cu ID-ul specificat
        // Exemplu de cod:
        $language = Language::find($id);
        $language->delete();

        // Redirecționează înapoi la pagina de limbă
        return redirect()->route('langs.index');
    }


}