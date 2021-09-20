<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class EadContent extends Model
{
    use HasFactory, LogsActivity;

    protected $table = "ead_contents";

    protected $fillable = [
        'name',
        'cover',
        'module_id',
        'description',
        'title',
        'slug',
        'headline',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'EAD Conteúdo';
    protected static $logAttributes = [
        'name',
        'cover',
        'module_id',
        'description',
        'title',
        'slug',
        'headline',
    ];

    public function module()
    {
        return $this->belongsTo(EadModule::class);
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
