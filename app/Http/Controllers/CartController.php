<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request) {
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
        } else {
            $cart = $request->session()->put('cart', [
                '1' => 2,
                '2' => 3,
                '3' => 4
            ]);
        }

        $products = [];

        foreach($cart as $id => $qte)
        {
            $products[$id] = Product::findOrFail($id);
        }

        return view('cart.index', ['products' => $products]);
    }
}
