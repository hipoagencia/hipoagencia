<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'status',
        'title',
        'slug',
        'headline',
    ];

    protected $hidden = [

    ];

    public function images()
    {
        return $this->hasMany(ProductImages::class, 'product', 'id')
            ->orderBy('order', 'ASC');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'product_categories', 'product', 'category');
    }

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setPriceAttribute($value)
    {
        if(empty($value)){
            $this->attributes['price'] = null;
        } else {
            $this->attributes['price'] = floatval($this->convertStringToDouble($value));
        }
    }

    private function convertStringToDouble($param)
    {
        if(empty($param)){
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }
}
