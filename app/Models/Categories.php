<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Categories extends Model
{
    use HasFactory,LogsActivity;

    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Categorias';
    protected static $logAttributes = [
        'name'
    ];

}
