<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
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

Route::get('/articles.search',[PublicController::class , 'searchArticles'])->name('articles.search');

Route::get('/revisor/home',[RevisorController::class , 'index'])->name('reviosr.index');
Route::patch('/accept/article/{article}',[RevisorController::class , 'acceptArticle'])->name('revisor.accept_article');
Route::patch('/reject/article/{article}',[RevisorController::class , 'rejectArticle'])->name('revisor.reject_article');



