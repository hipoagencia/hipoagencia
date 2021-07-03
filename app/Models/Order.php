<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Order extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'orders';

    protected $fillable = [
        'user',
        'status',
        'total',
        'stripe_code',
        'stripe_token',
        'observation',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Pedidos';
    protected static $logAttributes = [
        'user',
        'status',
        'total',
        'stripe_code',
        'stripe_token',
        'observation',
    ];

}
