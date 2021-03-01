<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Panier - Bookdev';
        $description = 'Le panier de notre boutique';

        $cart = Cart::initCart($request);

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
        $cart = Cart::initCart($request);
        $validated = $request->validate([
            'qte' => 'integer|max:3'
        ]);
        $cart = Cart::addCart($cart, $product, $validated['qte']);
        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        $cart = Cart::initCart($request);
        $quantites = $request->except(['_token', '_method']);
        $quantites_validated = validator($quantites,['integer','max:3']);
        dd($quantites_validated);
        $cart = Cart::updateCart($cart, $quantites);
        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }
}
