<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'posts';

    protected $with = ['user', 'categories'];

    protected $fillable = [
        'name',
        'cover',
        'author',
        'description',
        'title',
        'slug',
        'headline'
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Posts';
    //protected static $ignoreChangedAttributes = ['text'];
    protected static $logAttributes = [
        'name',
        'cover',
        'author',
        'description',
        'title',
        'slug',
        'headline'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'post_categories', 'post', 'category');
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
