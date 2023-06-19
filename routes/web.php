<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'admin'], function ($router) {
    $router->get('/', [AdminController::class, 'index'])->name('admin.home');
    $router->get('/langs', [LangController::class, 'index'])->name('admin.langs');
    $router->get('/langs', [LangController::class, 'index'])->name('langs.index');
    $router->post('/langs', [LangController::class, 'store'])->name('langs.store');
    $router->delete('/langs/{id}', [LangController::class, 'destroy'])->name('langs.destroy');
    $router->resource('pages', App\Http\Controllers\PageController::class);    
    $router->resource('categories', App\Http\Controllers\CategoryController::class);    
});
