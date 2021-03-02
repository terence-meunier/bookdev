<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use phpDocumentor\Reflection\Types\Integer;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Panier - Bookdev';
        $description = 'Le panier de notre boutique';

        $cart = Cart::initCart($request);

        $products = [];

        $totalprice = 0;


        foreach ($cart as $id => $qte) {
            $products[$id] = Product::findOrFail($id);
            $totalprice = $totalprice +($products[$id]->price_with_vat  * $qte);
        }

        return view('cart.index', [
            'title' => $title,
            'description' => $description,
            'products' => $products,
            'totalprice' => $totalprice,
        ]);
    }

    public function store(Request $request, Product $product)
    {
        $cart = Cart::initCart($request);
        $validated = $request->validate([
            'qte' => 'integer'
        ]);
        $cart = Cart::addCart($cart, $product, $validated['qte']);
        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function update(Request $request, int $id)
    {
        $cart = Cart::initCart($request);
        $validated = $request->validate([
            'quantity' => 'integer'
        ]);
        $cart = Cart::updateCart($cart,$validated['quantity'], $id );
        $request->session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function destroy(int $id)
    {

    }

}
