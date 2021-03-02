<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public static function initCart($request)
    {
        $cart = $request->session()->get('cart', []);
        return $cart;
    }

    public static function addCart($cart, $product, $qte)
    {
        if (array_key_exists($product->id, $cart)) {
            $cart[$product->id] += $qte;
        } else {
            $cart[$product->id] = $qte;
        }

        return $cart;
    }

    public static function updateCart($cart, $quantity, $id)
    {
        $cart[$id] = $quantity;
        return $cart;
    }
}
