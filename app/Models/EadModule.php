<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class EadModule extends Model
{
    use HasFactory, LogsActivity;

    protected $table = "ead_modules";

    protected $fillable = [
        'user_id',
        'name',
        'cover',
        'description',
        'title',
        'slug',
        'headline',
        'premium',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'EAD Módulos';
    protected static $logAttributes = [
        'user_id',
        'name',
        'cover',
        'description',
        'title',
        'slug',
        'headline',
        'premium'
    ];


    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'ead_modules_categories', 'eadModule_id', 'category_id');
    }

    public function getCoverAttribute($value)
    {
        return Storage::url($value);
    }

    public function setSlugAttribute($value)
    {
        if(empty($value)){
            $this->attributes['slug'] = Str::slug($this->attributes['title']);;
        } else {
            $this->attributes['slug'] = $value;
        }
    }
}
