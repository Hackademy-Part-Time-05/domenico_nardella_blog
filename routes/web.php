<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::get('account', [ArticleController::class, 'index'])->name('account')->middleware('auth');

Route::get('account/articles', [ArticleController::class, 'index'])->name('articles.index')->middleware('auth');

Route::get('account/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('account/articles/store', [ArticleController::class, 'store'])->name('articles.store');

Route::get('account/articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');

Route::get('account/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

Route::put('account/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');

Route::resource('categories', \App\Http\Controllers\CategoryController::class);


