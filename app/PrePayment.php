<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PrePayment extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Indi_ID',
        'Name',
        'Surname',
        'Rank',
        'Station',
        'IDNumber',
        'PerNumber',
        'Amount',
        'StartDate',
        
    ];
}
