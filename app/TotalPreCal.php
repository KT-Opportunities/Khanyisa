<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TotalPreCal extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Indi_ID',
        'TotalFamily',
        'WiderChildren',
        'ExFamily',
        'IncomeCon',
        'Airtime',
        'CarHire',
        'GrandTotal',
    ];
}
