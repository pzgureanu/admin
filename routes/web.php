<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\FilterController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::localized(function () {
    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/catalog/laptops/{slug}', [IndexController::class, 'laptop'])->name('laptop');
});

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function ($router) {
    $router->resource('categories', CategoryController::class);
    $router->get('/', [HomeController::class, 'index'])->name('admin.home');
    $router->resource('pages', PageController::class);
    $router->resource('sliders', SliderController::class);
    $router->resource('products', ProductController::class);
    $router->resource('properties', PropertyController::class);
    $router->resource('filters', FilterController::class);
    $router->post('product-delete-image', [ProductController::class, 'productDeleteImage']);
});