<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('principal','welcome')->name('welcome');
Route::view('contacto', 'nosotros')->name('nosotros');

Route::get('curso', [HomeController::class, 'index'])->name('f');
Route::get('curso/create', [HomeController::class, 'create']);
Route::get('curso/{curso}', [HomeController::class, 'show']);

/*Route::get('products', [ProductController::class,'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{products}',[ProductController::class, 'show'])->name('products.show');
Route::get('products/{products}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{products}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{products}',[ProductController::class, 'destroy'])->name('products.destroy');

Route::resource('productos', ProductController::class)->parameters(['productos'=>'product'])->names('products');*/

Route::resource('productos', ProductController::class)->parameters(['productos'=>'product'])->names('products');