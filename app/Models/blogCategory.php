<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class blogCategory extends Model
{
    use HasFactory,LogsActivity;

    protected $table = 'blogcategories';

    protected $fillable = [
        'name',
        'color',
        'iconWhite',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Blog Categories';
    protected static $logAttributes = [
        'name',
        'color',
        'iconWhite',
    ];


}
