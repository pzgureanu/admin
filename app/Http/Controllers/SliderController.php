<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

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
        return view('sliders.index', compact('sliders'));
    }

    public function create()
    {
        $languages = $this->languages;
        return view('sliders.create', compact('languages'));
    }

    // restul metodelor

    public function edit(Slider $slider)
    {
        $languages = $this->languages;
        return view('sliders.edit', compact('slider', 'languages'));
    }

    public function store(Request $request)
    {
        $slider = Slider::create($request->all());
        $slider->addMediaFromRequest('image')->toMediaCollection('images');

        return redirect()->route('sliders.index')
            ->with('success', 'Sliderul a fost creat cu succes.');
    }

    public function show(Slider $slider)
    {
        return view('sliders.show', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $slider->update($request->all());

        if ($request->hasFile('image')) {
            $slider->clearMediaCollection('images');
            $slider->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('sliders.index')
            ->with('success', 'Sliderul a fost actualizat cu succes.');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('sliders.index')
            ->with('success', 'Sliderul a fost șters cu succes.');
    }
}