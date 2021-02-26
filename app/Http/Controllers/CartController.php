<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Panier - Bookdev';
        $description = 'Le panier de notre boutique';

        $cart = $this->initCart($request);

        $products = [];

        foreach ($cart as $id => $qte) {
            $products[$id] = Product::findOrFail($id);
        }

        return view('cart.index', [
            'title' => $title,
            'description' => $description,
            'products' => $products
        ]);
    }

    public function store(Request $request, Product $product)
    {
        $cart = $this->initCart($request);
        $cart = $this->addCart($cart, $product, $request->input('qte'));
        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    private function initCart($request)
    {
        $cart = $request->session()->get('cart', []);
        return $cart;
    }

    private function addCart($cart, $product, $qte)
    {
        if (array_key_exists($product->id, $cart)) {
            $cart[$product->id] += $qte;
        } else {
            $cart[$product->id] = $qte;
        }

        return $cart;
    }
}
