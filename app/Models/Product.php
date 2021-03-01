<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Calcul de la TVA, ici à 20%
    private static $facteur_tva = 1.2;

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    //méthode qui retourne le prix ttc
    public function priceTTC() {
        $price_ttc = $this->price_ht * self::$facteur_tva;
        return number_format($price_ttc, 2);
    }
}
