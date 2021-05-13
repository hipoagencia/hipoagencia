<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImages extends Model
{
    use HasFactory;

    protected $table = "product_images";

    protected $fillable = [
        'product',
        'path',
        'cover',
        'order'
    ];

    public function getPathAttribute($value)
    {
        return Storage::url($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y - H:i:s', strtotime($value));
    }
}
