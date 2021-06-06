<?php

namespace App\Models;

use App\Support\Cropper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasFactory, Notifiable, LogsActivity;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'genre',
        'document',
        'date_of_birth',
        'cover',
        'zipcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'telephone',
        'cell'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'is_admin',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Usuários';
    protected static $ignoreChangedAttributes = ['password', 'remember_token'];
    protected static $logAttributes = [
        'name',
        'last_name',
        'email',
        'password',
        'genre',
        'document',
        'date_of_birth',
        'cover',
        'zipcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'telephone',
        'cell'
    ];

    public function getCoverAttribute($value)
    {
        return Storage::url($value);
    }

    public function getUrlCoverAttribute()
    {
        if(!empty($this->cover)){
            return Storage::url(Cropper::thumb($this->cover, 500, 500));
        }

        return '';
    }

    public function scopeUsers($query)
    {
        return $query->where('is_admin', false);
    }


    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = $this->clearFields($value);
    }

    public function getDocumentAttribute($value)
    {
        return substr($value, 0, 3) . '.' . substr($value, 3, 3) . '.' . substr($value, 6, 3) . '-' . substr($value, 9, 2);
    }

    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = $this->converStringToDate($value);
    }


    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function setTelephoneAttribute($value)
    {
        $this->attributes['telephone'] = $this->clearFields($value);
    }

    public function setCellAttribute($value)
    {
        $this->attributes['cell'] = $this->clearFields($value);
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $this->converStringToDate($value);
    }

    public function getDateOfBirthAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    private function convertStringToDouble(?string $param)
    {
        if (empty($param)) {
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }

    private function converStringToDate(?string $param)
    {
//        if(empty($param)){
//            return null;
//        }
//
//        list($day, $month, $year) = explode('/', $param);
//        return (new \DateTime($year . '-' . $month . '-' . $day))->format('Y-m-d');

        return $param;
    }

    private function clearFields(?string $param)
    {
        if (empty($param)) {
            return '';
        }

        return str_replace(['.', '-', '/', '_', '(', ')', ' '], '', $param);
    }
}
