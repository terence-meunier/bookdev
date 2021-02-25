<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Méthode qui affiche page d'accueil
     */
    public function index() {
        $categories = Category::all();
        $products = Product::all();
        return view('homepage', [
            'products' => $products,
            'categories' => $categories
        ]);

    }
}
