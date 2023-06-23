<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Arr;

class SliderController extends Controller
{
    private $languages = null;

    public function __construct()
    {
        $this->languages = config('localized-routes.supported_locales');
    }

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        $languages = $this->languages;
        return view('admin.sliders.create', compact('languages'));
    }

    // restul metodelor

    public function edit(Slider $slider)
    {
        $languages = $this->languages;

        return view('admin.sliders.create', compact('slider', 'languages'));
    }

    public function store(Request $request)
    {

        if ($request->has('id')) {
            $slider = Slider::find($request->get('id'));
        } else {
            $slider = new Slider();
        }

        $values = $request->all();

        foreach ($this->languages as $language) {
            $slider->setTranslation('title', $language, Arr::get($values, 'title.' . $language), '');
        }

        $slider->save();

        // $slider->addMediaFromRequest('image')->toMediaCollection('images');

        if ($request->hasFile('image')) {
            $slider->clearMediaCollection('images');
            $slider->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('sliders.index')
            ->with('success', 'Sliderul a fost creat cu succes.');
    }

    public function show(Slider $slider)
    {
        return view('admin.sliders.show', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $slider->update($request->all());

        if ($request->hasFile('image')) {
            $slider->clearMediaCollection('images');
            $slider->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('adminsliders.index')
            ->with('success', 'Sliderul a fost actualizat cu succes.');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('sliders.index')
            ->with('success', 'Sliderul a fost șters cu succes.');
    }
}