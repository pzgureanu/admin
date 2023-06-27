<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\ProductType;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $brandProducts = Product::where('is_brand', true)->get();
        $newProducts = Product::where('is_new', true)->get();
        $productTypes = ProductType::all();
        return view('home', compact('sliders', 'brandProducts', 'newProducts', 'productTypes'));
    }

    public function laptop($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();
        $productTypes = ProductType::all();
      
        return view('laptop', compact('product', 'productTypes'));
    }

}