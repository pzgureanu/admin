<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $brandProducts = Product::where('is_brand', true)->get();
        $newProducts = Product::where('is_new', true)->get();

        return view('home', compact('sliders', 'brandProducts', 'newProducts'));
    }

    public function laptop($slug)
    {
        $laptop = Product::whereSlug($slug)->firstOrFail();
        
        return view('laptop', compact('laptop'));
    }
}
