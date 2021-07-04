<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    use HasFactory;

    protected $table = 'order_products';

    protected $fillable = [
        'order',
        'product',
        'product_amount',
        'price',
        'price_total',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order', 'id');
    }

    public function produc()
    {
        return $this->belongsTo(Product::class, 'product', 'id');
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }


    public function getPriceTotalAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

}
