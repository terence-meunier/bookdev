<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function show(Product $product)
    {
        $title = $product->title . '- Bookdev';
        $title = $product->title . ' - Bookdev';
        $description = 'La catégorie blablabla';
        return view('products.show', ['product' => $product,
            'title' => $title,
            'description' => $description]);
    }
}
