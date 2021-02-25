<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Méthode qui affiche page d'accueil
     */
    public function index() {

        $products = Product::all();
        return view('homepage', ['products' => $products]);

    }
}
