<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
//rotta per il form crea il tuo prodotto 
Route::get('/create/product',[ProductController::class,"create"])->name('create_product');
// rotta per il form edit il tuo prodotto 
Route::get('/product/edit/{product}',[ProductController::class,"edit"])->name('product_edit');
