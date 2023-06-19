<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/langs', [LangController::class, 'index'])->name('admin.langs');
Route::get('/admin/langs', [LangController::class, 'index'])->name('langs.index');
Route::post('/admin/langs', [LangController::class, 'store'])->name('langs.store');
Route::delete('/admin/langs/{id}', [LangController::class, 'destroy'])->name('langs.destroy');
Route::resource('admin/pages', App\Http\Controllers\PageController::class);
