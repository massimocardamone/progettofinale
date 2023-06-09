<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
//home
Route::get('/', [PublicController::class,'homepage'])->name('home');
//vista creazione form
Route::get('/formArticle',[ArticleController::class,'create'])->name('create');
//dettagli
Route::get('/article/detail{article}',[ArticleController::class, 'show'])->name('show');
//indice prodotti
route::get('/Articles',[ArticleController::class, 'index'])->name('article_index');
//indice categoria
route::get('/article/category{genre}',[ArticleController::class, 'show_category'])->name('show_category');

//*home revisione
route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor_index');
//*accetta articolo
route::patch('/revisor/acept/{article}', [RevisorController::class, ''])->name('revisor_accept');
route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor_index');
//*rifiuta articolo
route::patch('/revisor/refuse/{article}', [RevisorController::class, ''])->name('revisor_refuse');