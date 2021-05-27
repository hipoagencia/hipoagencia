<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
        'name',
        'description',
        'status',
        'title',
        'slug',
        'headline',
    ];

    public function images()
    {
        return $this->hasMany(GalleryImages::class, 'gallery', 'id')
            ->orderBy('order', 'ASC');
    }
}