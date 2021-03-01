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


    /**
     * méthode qui retourne le prix ttc
     * @return float|int
     */
    public function getPriceWithVatAttribute()
    {
        return $this->price_ht * (1+($this->tva / 100));
    }
}
