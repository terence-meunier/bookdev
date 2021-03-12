<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders_has_products()
    {
        return $this->hasMany(OrderHasProduct::class);
    }

    /**
     * méthode qui retourne le prix ttc
     * @return float|int
     */
    public function getPriceWithVatAttribute()
    {
        return number_format($this->price_ht * (1+($this->tva / 100)), 2);
    }
}
