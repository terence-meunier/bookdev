<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrfail($id);
        return view('products.show', ['product' => $product]);
    }
}
