<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

// Route pour le produit selon l'id
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Route pour la catégorie selon l'id
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');



