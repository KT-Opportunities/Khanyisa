<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;



class Spouse extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Indi_ID',
        'Surname',
        'IDNumber',
        'Name',
        'UMNGCWABO',
        'Premium',
    ];
}
