<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SliderController;

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

Route::get('/', [IndexController::class, 'index'])->name('home');

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function ($router) {
    $router->resource('categories', CategoryController::class);
    $router->get('/', [HomeController::class, 'index'])->name('admin.home');
    $router->resource('pages', PageController::class);
    $router->resource('sliders', SliderController::class);
});