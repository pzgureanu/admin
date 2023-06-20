<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
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

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function ($router) {
    $router->resource('categories', CategoryController::class);
    $router->get('/', [AdminController::class, 'index'])->name('admin.home');
    // Deja nu mai avem nevoie de LangController.
    // $router->get('/langs', [LangController::class, 'index'])->name('admin.langs');
    // $router->get('/langs', [LangController::class, 'index'])->name('langs.index');
    // $router->post('/langs', [LangController::class, 'store'])->name('langs.store');
    // $router->delete('/langs/{id}', [LangController::class, 'destroy'])->name('langs.destroy');
    $router->resource('admin/pages', App\Http\Controllers\PageController::class);
    $router->resource('/pages', PageController::class);
    $router->get('/pages', [PageController::class, 'index'])->name('pages.index');
    $router->get('/pages/create', [PageController::class, 'create'])->name('pages.create');
    $router->post('/pages', [PageController::class, 'store'])->name('pages.store');
    $router->get('/pages/{page}', [PageController::class, 'show'])->name('pages.show');
    $router->get('/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
    $router->put('/pages/{page}', [PageController::class, 'update'])->name('pages.update');
    $router->delete('/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');
});

