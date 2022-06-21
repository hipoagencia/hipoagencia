<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class Categories extends Model
{
    use HasFactory,LogsActivity;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Categorias';
    protected static $logAttributes = [
        'name',
        'slug',
    ];

    public function setSlugAttribute($value)
    {
        if(empty($value)){
            $this->attributes['slug'] = Str::slug($this->attributes['name']);
        } else {
            $this->attributes['slug'] = $value;
        }
    }

}
