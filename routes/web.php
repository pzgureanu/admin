<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
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

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

// Listarea limbilor
Route::get('/admin/languages', [LanguageController::class, 'index'])
    ->name('languages.index');

// Formularul de creare limbă
Route::get('/admin/languages/create', [LanguageController::class, 'create'])->name('languages.create');


// Salvarea limbii create
Route::post('/admin/languages', [LanguageController::class, 'store'])
    ->name('languages.store');

// Formularul de editare limbă
Route::get('/admin/languages/{language}/edit', [LanguageController::class, 'edit'])
    ->name('languages.edit');

// Actualizarea limbii
Route::put('/admin/languages/{language}', [LanguageController::class, 'update'])
    ->name('languages.update');

// Ștergerea limbii
Route::delete('/admin/languages/{language}', [LanguageController::class, 'destroy'])
    ->name('languages.destroy');



Route::resource('/admin/pages', PageController::class);
Route::get('/admin/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/admin/pages/create', [PageController::class, 'create'])->name('pages.create');
Route::post('/admin/pages', [PageController::class, 'store'])->name('pages.store');
Route::get('/admin/pages/{page}', [PageController::class, 'show'])->name('pages.show');
Route::get('/admin/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
Route::put('/admin/pages/{page}', [PageController::class, 'update'])->name('pages.update');
Route::delete('/admin/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');