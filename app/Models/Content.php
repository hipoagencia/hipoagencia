<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class Content extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'contents';

    protected $fillable = [
        'name',
        'description',
        'title',
        'slug',
        'headline',
        'status'
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Conteúdos';
    protected static $logAttributes = [
        'name',
        'description',
        'title',
        'slug',
        'headline',
        'status'
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
