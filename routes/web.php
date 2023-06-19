<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
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

Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/langs', [LangController::class, 'index'])->name('admin.langs');
Route::get('/admin/langs', [LangController::class, 'index'])->name('langs.index');
Route::post('/admin/langs', [LangController::class, 'store'])->name('langs.store');
Route::delete('/admin/langs/{id}', [LangController::class, 'destroy'])->name('langs.destroy');
Route::resource('admin/pages', App\Http\Controllers\PageController::class);



Route::resource('/admin/pages', PageController::class);
Route::get('/admin/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/admin/pages', [PageController::class, 'store'])->name('pages.store');
Route::get('/admin/pages/{page}', [PageController::class, 'show'])->name('pages.show');
Route::get('/admin/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::put('/admin/pages/{page}', [PageController::class, 'update'])->name('pages.update');
Route::delete('/admin/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');