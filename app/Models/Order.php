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
        'code',
        'reference',
        'observation',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Pedidos';
    protected static $logAttributes = [
        'user',
        'status',
        'total',
        'code',
        'reference',
        'observation',
    ];

    public function userr()
    {
        return $this->belongsTo(User::class, 'user', 'id');

    }

    public function products()
    {
        return $this->hasMany(OrderProducts::class, 'order', 'id');
    }

    public function getTotalAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }


    public function getStatusAttribute($value)
    {

        switch ($value) {
            case 1;
                return $value = "Aguardando Pagamento";
                break;
            case 2;
                return $value = 'Em análise';
                break;
            case 3;
                return $value = 'Paga';
                break;
            case 4;
                return $value = 'Disponível';
                break;
            case 5;
                return $value = 'Em disputa';
                break;
            case 6;
                return $value = 'Devolvida';
                break;
            case 7;
                return $value = 'Cancelada';
                break;
            case 8;
                return $value = 'Debitado';
                break;
            case 9;
                return $value = 'Retenção temporária';
                break;
            default;
                return $value == 'Aguardando';
                break;

        }


    }

}
