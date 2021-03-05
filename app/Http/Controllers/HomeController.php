<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Méthode qui affiche page d'accueil
     */
    public function index() {
        $title = 'Bookdev : la boutique de livres pour les développeurs informatique';
        $description = 'Découvrez la plus grande sélection de livres dédiés aux développeurs et informaticiens.';
        $categories = Category::all();
        $products = Product::all();
        return view('homepage', [
            'products' => $products,
            'categories' => $categories,
            'title' => $title,
            'description' => $description
        ]);

    }
}
