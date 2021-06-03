<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Gallery extends Model
{
    use HasFactory,LogsActivity;

    protected $table = 'gallery';

    protected $fillable = [
        'name',
        'description',
        'status',
        'title',
        'slug',
        'headline',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Galerias';
    protected static $logAttributes = [
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
