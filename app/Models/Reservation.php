<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use CrudTrait, softDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'reservations';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = [
         'start_time',
         'end_time',
         'user_id',
         'salle_id',
         'isApproved'

    ];
    // protected $hidden = [];
    // protected $dates = [];



    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function salle()
    {
        return $this->belongsTo(Salle::class, 'salle_id');

    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }

  /*   public function getStartTimeAttribute($value)
    {
        return $value ? Carbon  ::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;

    }

    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;

    }

    public function getEndTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;

    }

    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;

    } */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
