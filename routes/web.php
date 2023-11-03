<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
// 
Route::get('/article.create',[ArticleController::class , 'create'])->name('article_create');
Route::get('/show/{article}',[ArticleController::class , 'show'])->name('article_show');
Route::get('/article.index',[ArticleController::class , 'index'])->name('article_index');


Route::get('/category.show/{category}',[ArticleController::class , 'categoryShow'])->name('categoryShow');
