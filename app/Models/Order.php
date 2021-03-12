<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'order_create' => 'datetime',
        'order_delivery' => 'datetime'
        ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function orders_has_products()
    {
        return $this->hasMany(OrderHasProduct::class);
    }
}
