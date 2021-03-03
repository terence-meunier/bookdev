<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

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

// Route de la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route pour le produit
Route::resource('product', ProductController::class);

// Route pour la catégorie selon l'id
Route::resource('category', CategoryController::class);


// Route pour la catégorie selon l'id
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

// Route pour le panier
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
