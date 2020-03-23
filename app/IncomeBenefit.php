<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class IncomeBenefit extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Indi_ID',
        'BPM',
        'BPMpre',
        'OPBenfit',
        'OPcover',
        'OPpre',
        
    ];
}
