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

Route::get('/', function () {return view('welcome');});

// Route::get('articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::get('account/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('account/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('account/articles/store', [ArticleController::class, 'store'])->name('articles.store');

Route::get('account/articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');


