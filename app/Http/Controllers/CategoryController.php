<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Hamcrest\Core\AllOf;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id) {
        $category = Category::findOrFail($id);
        $products = $category->products;
        $title = $category->name . ' - Bookdev';
        $description = 'La catégorie blablabla';
        return view('categories.show', [
            'products' => $products,
            'category' => $category,
            'title' => $title,
            'description' => $description
        ]);
    }

    public function index() {
        $categories = Category::all();
        $title = 'Catégories de livres - Bookdev';
        $description = 'Découvrez les différentes catégories de nos livres.';
        return view('categories.index', [
            'categories' => $categories,
            'title' => $title,
            'description' => $description]);
    }
}
