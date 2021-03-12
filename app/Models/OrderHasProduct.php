<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHasProduct extends Model
{
    use HasFactory;

    protected $table = 'orders_has_products';

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
